<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Website;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }

    public function login(){

        return view('auth.login');
    }

    public function form(){
        return view('dashboard.form');
    }

    public function about_us(){
        $posts = Website::all()->toArray();
        $posts= Website::orderBy('id', 'ASC')->get();
        return view('about-us', compact('posts'));
    }

    public function contact_us(){
        $posts = Website::all()->toArray();
        $posts= Website::orderBy('id', 'ASC')->get();
        return view('contact', compact('posts'));
    }

    public function software(){
        $posts = Website::all()->toArray();
        $posts= Website::orderBy('id', 'ASC')->get();
        return view('solution.software', compact('posts'));
    }

    public function mobile(){
        $posts = Website::all()->toArray();
        $posts= Website::orderBy('id', 'ASC')->get();
        return view('solution.mobile', compact('posts'));
    }

    public function hardware(){
        $posts = Website::all()->toArray();
        $posts= Website::orderBy('id', 'ASC')->get();
        return view('solution.hardware', compact('posts'));
    }

    public function infrastructure(){
       $posts = Website::all()->toArray();
        $posts= Website::orderBy('id', 'ASC')->get();
        return view('solution.infrastructure', compact('posts'));
    }

    public function register(){
        return view('auth.register');
    }

    public function welcome(){
        $posts = Website::all()->toArray();
        $posts= Website::orderBy('id', 'ASC')->get();
        return view('welcome', compact('posts'));
    }

    public function layout(){
        $posts = Website::all()->toArray();
        $posts= Website::orderBy('id', 'ASC')->get();
        return view('layout.app', compact('posts'));
    }
}

