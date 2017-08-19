<?php

namespace App\Funpacol\Entities;

use Illuminate\Database\Eloquent\Model;

class Promoter extends Model
{
    protected $fillable  = ['first_name','last_name','document_id','document','city_id','address','cell_phone','date_birthday','email','state'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    public function advisers()
    {
        return $this->hasMany(Adviser::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }



}
