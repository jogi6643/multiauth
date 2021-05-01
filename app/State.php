<?php

namespace App;
use App\City;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    protected $table ='states'; 
    protected $fillable =['name'];

    public function city()
    {
        // return $this->hasone('App\city','state_id','id');
        return $this->hasOne(City::class);
        // return $this->belongsTo('App\State');
    }

    public function citymany()
    {
        return $this->hasmany(City::class);
    }
}
