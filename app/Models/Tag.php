<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    //    явна привязка таблицы
    protected $table = 'tags';
    protected $guarded = false;
}
