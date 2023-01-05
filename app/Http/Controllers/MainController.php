<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index(){
        $tweets = Tweet:: all();
        dd($tweets);

        return view('tweets', [
            'tweets' => $tweets
        ]);
    }

    // public function home(){
    //     return view('home');
    // }
}
