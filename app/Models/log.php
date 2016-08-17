<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class log extends Model
{
    protected $table = 'logtest';
    protected $fillable = ['email','password','logstatus'];
}
