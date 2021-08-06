<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infomationform;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function adminHome()
    {
       
        $infomationforms=Infomationform::orderBy('id','DESC')->paginate(10);
       
        return view('backend.infomationform.index')->with('infomationforms',$infomationforms);
    }
}
