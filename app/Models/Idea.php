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

        $this->belongsTo(UserController::class);
    }




    public function comments() {

        $this->hasMany(CommentController::class);
    }

}
