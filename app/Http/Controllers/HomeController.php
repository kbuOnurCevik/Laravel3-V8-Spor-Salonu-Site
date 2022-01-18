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

    public static function categoryList()
    {
        return Category::where('status', '=', 'true')->where('parent_id', '=', 0)->with('children', function ($q) {
            $q->where('status', '=', 'true');
        })->get();
    }

    public static function getsetting()
    {
        return Setting::first();
    }

    public function index()
    {

        $setting = Setting::first();
        $slider = Product::where('status', '=', 'true')->select('id', 'title', 'image', 'price', 'month', 'slug')->limit(6)->inRandomOrder()->get();
        $daily = Product::where('status', '=', 'true')->select('id', 'title', 'image', 'price', 'month', 'slug')->limit(3)->inRandomOrder()->get();
        $last = Product::where('status', '=', 'true')->select('id', 'title', 'image', 'price', 'month', 'slug')->limit(3)->orderByDesc('id')->get();
        $picked = Product::where('status', '=', 'true')->select('id', 'title', 'image', 'price', 'month', 'slug')->limit(3)->inRandomOrder()->get();
        $gallery = Image::select('image')->limit(16)->inRandomOrder()->get();
        #print_r($picked);
        # exit();
        $data = [
            'setting' => $setting,
            'slider' => $slider,
            'daily' => $daily,
            'picked' => $picked,
            'last' => $last,
            'gallery' => $gallery,
            'page' => 'home'
        ];
        return view('home.index', $data);
    }

    public function product($id, $slug)
    {
        $data = Product::find($id);
        $datalist = Image::where('product_id', $id)->get();
        $reviews = \App\Models\Review::where('product_id', $id)->where('status', '=', 'true')->get();
        #print_r($data);
        #exit();
        return view('home.product_detail', ['data' => $data, 'datalist' => $datalist, 'reviews' => $reviews]);
    }

    public function getproduct(Request $request)
    {

        $search = $request->input('search');

        if ($search !== null){
            $count = Product::where('status', '=', 'true')->where('title', 'like', '%' . $search . '%')->get()->count();

            if ($count == 1) {
                $data = Product::where('status', '=', 'true')->where('title', 'like', '%' . $search . '%')->first();
                return redirect()->route('product', ['id' => $data->id, 'slug' => $data->slug]);
            } else {
                return redirect()->route('productlist', ['search' => $search]);
            }
        }
        else {
            return redirect()->route('home');
        }

    }

    public function productlist($search)
    {
        $datalist = Product::where('title', 'like', '%' . $search . '%')->whereHas('category', function ($q) {
            $q->where('status', '=', 'true');})->where('status', '=', 'true')->get();

        return view('home.search_products', ['search' => $search, 'datalist' => $datalist]);
    }

    public function categoryproducts($id, $slug)
    {
        $datalist = Product::where([['category_id', $id], ['status', '=', 'true']])->get();
        $data = Category::find($id);
        #print_r($data);
        #exit();
        return view('home.category_products', ['data' => $data, 'datalist' => $datalist]);
    }


    public function aboutus()
    {
        $setting = Setting::first();
        return view('home.about', ['setting' => $setting]);
    }

    public function faq()
    {
        $datalist = Faq::where('status', '=', 'true')->get()->sortBy('position');
        return view('home.faq', ['datalist' => $datalist]);
    }

    public function schedule()
    {
        $setting = Setting::first();
        return view('home.schedule',['setting' => $setting]);
    }

    public function gallery()
    {
        $datalist = Image::select('image')->limit(32)->inRandomOrder()->get();
        return view('home.gallery', ['datalist' => $datalist]);
    }

    public function contact()
    {
        $setting = Setting::first();
        return view('home.contact', ['setting' => $setting]);
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

        return redirect()->route('contact')->with('info', 'Mesajınız Kaydedilmiştir. Teşekkürler !');

    }


    public function login()
    {
        return view('home.index');
    }

    public function logincheck(Request $request)
    {

        if ($request->isMethod('post')) {
            $credentials = $request->only('email', 'password');
            if (Auth::attempt($credentials)) {
                $request->session()->regenerate();

                return redirect()->intended('home');
            }

            return back()->withErrors([
                'email' => 'The provided credentials do not match our records.',
            ]);
        } else {
            return view('admin.login');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('');
    }

}
