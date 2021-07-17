<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    //    явна привязка таблицы
    protected $table = 'cars';
    protected $guarded = false;
}
