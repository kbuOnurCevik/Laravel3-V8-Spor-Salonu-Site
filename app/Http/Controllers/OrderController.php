<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Orderitem;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datalist = Order::where('user_id',Auth::id())->get();

        return view('home.user_order',['datalist'=>$datalist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request,$id)
    {
        $price = $request->input('price');

        $month = $request->input('month');

        $total = $request->input('price');

        $startdayy = date("Y-m-d");

        $startday = $request->input('startday');

        if($startday == null)
            $startday = $startdayy;

        $dataproduct = Product::find($id);

        $finishday = date('Y-m-d',strtotime("+$month months",strtotime("$startday")));


        return view('home.user_order_add',['price'=>$price,'month'=>$month,'startday'=>$startday,'finishday'=>$finishday,'total'=>$total,'dataproduct'=>$dataproduct]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request,$id)
    {
        #get credit card information send to bank webservice if everything is ok next

        $month = $request->input('month');

        $total = $request->input('total');

        $startday = $request->input('startday');

        $finishday = $request->input('finishday');

        $data = new Order;
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->total = $total;
        $data->user_id = Auth::id();
        $data->IP = $_SERVER['REMOTE_ADDR'];
        $data->save();

        $rs = Product::find($id);

        $data2 = new Orderitem;
        $data2->user_id = Auth::id();
        $data2->product_id = $rs->id;
        $data2->order_id = $data->id;
        $data2->startdate = $startday;
        $data2->finishdate = $finishday;
        $data2->price = $total;
        $data2->months = $month;
        $data2->total = $total;
        $data2->save();


        return redirect()->route('user_orders')->with('info','Payment Completed');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order,$id)
    {
        $datalist = Orderitem::where('user_id',Auth::id())->where('order_id',$id)->get();

        return view('home.user_order_item',['datalist'=>$datalist]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
