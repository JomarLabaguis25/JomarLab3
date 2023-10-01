<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserController extends BaseController
{
    public function login()
    {
        return view('login');
    }
    public function forgotpass()
    {
        return view('forgotpass');
    }
    public function register()
    {
        return view('register');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function gallery()
    {
        return view('gallery');
    }
    public function news()
    {
        return view('news');
    }
    public function testimonial()
    {
        return view('testimonial');
    }
    public function product1()
    {
        return view('product1');
    }
    public function product2()
    {
        return view('product2');
    }
    public function product3()
    {
        return view('product3');
    }
    public function product4()
    {
        return view('product4');
    }
    public function readmore1()
    {
        return view('readmore1');
    }
    public function readmore2()
    {
        return view('readmore2');
    }
    public function readmore3()
    {
        return view('readmore3');
    }
    public function about1()
    {
        return view('about1');
    }
}
