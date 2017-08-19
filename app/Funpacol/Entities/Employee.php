<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 19/07/17
 * Time: 2:51 PM
 */

namespace App\Funpacol\Entities;


use Illuminate\Database\Eloquent\Model;

class Employee extends Model {

    protected $fillable  = ['first_name','last_name','document_id','document','city_id','position_id' ,'address','cell_phone','date_birthday','email','state'];


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

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }

    public function godfathers()
    {
        return $this->hasMany(Godfather::class);
    }


}