<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transport extends Model
{
    protected $fillable = ['id','modelo_id','marca_id','user_id','nombre'];
}
