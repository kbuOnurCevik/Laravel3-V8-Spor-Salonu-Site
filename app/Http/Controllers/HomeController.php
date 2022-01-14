<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Livewire\Review;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Image;
use App\Models\Message;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;

class HomeController extends Controller
{
    //

    public static function categoryList(){
        return Category::where('parent_id', '=', 0)->with('children')->get();
    }

    public static function getsetting(){
        return Setting::first();
    }

    public function index()
    {

        $setting = Setting::first();
        $slider = Product::select('id','title', 'image', 'price','slug')->limit(4)->get();
        $daily = Product::select('id','title', 'image', 'price','slug')->limit(3)->inRandomOrder()->get();
        $last = Product::select('id','title', 'image', 'price','slug')->limit(3)->orderByDesc('id')->get();
        $picked = Product::select('id','title', 'image', 'price','slug')->limit(3)->inRandomOrder()->get();
        #print_r($picked);
        # exit();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'daily' => $daily,
            'picked' => $picked,
            'last' => $last,
            'page' => 'home'
        ];
        return view('home.index',$data);
    }

    public function product($id,$slug)
    {
        $data = Product::find($id);
        $datalist = Image::where('product_id',$id)->get();
        $reviews = \App\Models\Review::where('product_id',$id)->get();
        #print_r($data);
        #exit();
        return view('home.product_detail',['data'=>$data,'datalist'=>$datalist,'reviews'=>$reviews]);
    }

    public function getproduct(Request $request)
    {
        $search = $request->input('search');
        $count = Product::where('title','like','%'.$search.'%')->get()->count();

        if($count==1){
            $data = Product::where('title','like','%'.$search.'%')->first();
            return redirect()->route('product',['id'=>$data->id,'slug'=>$data->slug]);
        }else{
            return redirect()->route('productlist',['search'=>$search]);
        }

    }

    public function productlist($search)
    {
        $datalist = Product::where('title','like','%'.$search.'%')->get();
        return view('home.search_products',['search'=>$search,'datalist'=>$datalist]);
    }

    public function categoryproducts($id,$slug)
    {
        $datalist = Product::where('category_id',$id)->get();
        $data = Category::find($id);
        #print_r($data);
        #exit();
        return view('home.category_products',['data'=>$data,'datalist'=>$datalist]);
    }


    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about',['setting'=>$setting]);
    }

    public function faq()
    {
        $datalist = Faq::all()->sortBy('position');
        return view('home.faq',['datalist'=>$datalist]);
    }
    public function schedule()
    {
        return view('home.schedule');
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact',['setting'=>$setting]);
    }

    public function sendmessage(Request $request)
    {
        $data = new Message();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');

        $data->save();

        return redirect()->route('contact')->with('info','Mesajınız Kaydedilmiştir. Teşekkürler !');

    }


    public function login(){
        return view('home.index');
    }

    public function logincheck(Request $request)
    {

        if ($request->isMethod('post')){
            $credentials = $request->only('email','password');
            if(Auth::attempt($credentials)){
                $request->session()->regenerate();

                return redirect()->intended('home');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        }
        else{
            return view('admin.login');
        }
    }

    public function logout(Request $request){
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('');
    }

}
