<?php

namespace App\Models;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    public function user() {

        $this->belongsTo('user_id', UserController::class);
    }




    public function comments() {

        $this->hasMany('comment_id', CommentController::class);
    }

}
