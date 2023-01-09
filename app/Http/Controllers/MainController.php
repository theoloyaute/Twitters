<?php

namespace App\Http\Controllers;

use App\Models\Tweet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class MainController extends Controller
{
    public function home(){
        return view('home');
    }

    public function index(){
        $tweets = Tweet::with('user')->get();

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

        Tweet::create([
            'message' => $request->message,
            'user_id' => Auth::id(),
        ]);

        return redirect('/');
    }

    public function delete($id){
        $tweet = Tweet::find($id);
        $tweet->delete();

        return redirect('/');
    }
}
