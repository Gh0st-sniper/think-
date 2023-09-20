<?php

namespace App\Models;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\UserController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Idea extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description','user_id'];

    public function user() {

       return $this->belongsTo(User::class);
    }




    public function comments() {

       return  $this->hasMany(Comment::class);
    }

}
