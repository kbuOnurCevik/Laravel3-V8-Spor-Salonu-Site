<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($product_id)
    {
        $data = Product::find($product_id);

        $images = DB::table('images')->where('product_id','=',$product_id)->get();

        return view('admin.image_add', ['data' => $data,'images'=>$images]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,$product_id)
    {
        $data = new Image;
        $dataproduct = Product::find($product_id);
        // $data->title = $request->input('title');
        $data->product_id = $product_id;
        if ($request->input('title') !== null){
            $data->title = $request->input('title');
        }

        if ($request->file('image') !== null){
            $data->image = Storage::putFile('images', $request->file('image'));
        }
        if($data->title === null || $data->image === null){
            return redirect()->route('admin_image_add',['product_id'=>$product_id])->with('warning','Warning! Eksiksiz doldurun.');
        }else{
            $data->save();
            return redirect()->route('admin_image_add',['product_id'=>$product_id])->with('success','Image Added');
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Image  $image
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image,$id,$product_id)
    {
        $data = Image::find($id);
        $data->delete();

        return redirect()->route('admin_image_add',['product_id'=>$product_id])->with('success','Image Deleted');
    }
}
