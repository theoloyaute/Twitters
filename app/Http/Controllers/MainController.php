<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function index(){
        $tweets = Tweet:: all();

        return view('tweets', [
            'tweets' => $tweets
        ]);
    }

    public function register(){

        return view('register');
    }



    public function store(Request $request){
        // $tweet = new Tweet();
        // $tweet->title = $request->title;
        // $tweet->message = $request->message;
        // $tweet->user_id = 1;
        // $tweet->save();
        dd($request);

        Tweet::create([
            'message' => $request->message,
            'user_id' => 1,
        ]);

        return redirect('/');
    }

    public function delete($id){
        $tweet = Tweet::find($id);
        $tweet->delete();

        return redirect('/');
    }
}
