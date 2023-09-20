<?php

namespace App\Models;

use App\Http\Controllers\IdeaController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function ideas () {

        $this->belongsTo(IdeaController::class);
    }
}
