<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    use HasFactory;

    protected $fillable = [
        'message',
        'user_id',
        'tweet_id',
    ];

    public function user(){
        return $this->belongsTo(User::class)->select(['id', 'name']);
    }

    public function childs($id){
        return Tweet::where('tweet_id', $id)->get();
    }
}
