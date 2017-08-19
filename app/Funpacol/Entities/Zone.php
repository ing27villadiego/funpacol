<?php

namespace App\Funpacol\Entities;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = ['city_id', 'name', 'state'];


    public function city()
    {
        return $this->belongsTo(City::class);
    }

}
