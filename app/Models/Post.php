<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    //    явна привязка таблицы
    protected $table = 'posts';
    protected $guarded = false;
}
