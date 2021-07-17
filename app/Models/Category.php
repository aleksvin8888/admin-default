<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    //    явна привязка таблицы
    protected $table = 'categories';
    protected $guarded = false;
}
