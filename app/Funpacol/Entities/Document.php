<?php

namespace App\Funpacol\Entities;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable = ['name'];

    public function promoters()
    {
        return $this->hasMany(Promoter::class);
    }

    public function advisers()
    {
        return $this->hasMany(Adviser::class);
    }

    public function postmens()
    {
        return $this->hasMany(Postmen::class);
    }


    public function datafamilies()
    {
        return $this->hasMany(Datafamily::class);
    }

}
