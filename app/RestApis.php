<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RestApis extends Model
{
    protected $table='restapis';
    protected $fillable = [
        'name', 'byname'
    ];
}
