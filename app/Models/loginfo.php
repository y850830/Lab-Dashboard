<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class loginfo extends Model
{
    protected $table = 'loginfo';
    protected $fillable = ['account','IP'];
}
