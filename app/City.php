<?php

namespace App;
use App\State;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    protected $table = 'cities';
    protected $fillable = ['name','state_id'];

    public function state()
    {
        return $this->belongsTo(state::class);
        // return $this->hasOne(state::class);
        // return $this->hasone('App\city','state_id','iiid');

    }
    public function statemany()
    {
        return $this->belongsTo(State::class);
    }
}
