<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = ['name', 'description', 'location', 'price', 'start_at'];
    protected $dates = ['start_at'];

    public function isFree(){
        return $this->price == 0;
    }
}
