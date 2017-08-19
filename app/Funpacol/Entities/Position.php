<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 19/07/17
 * Time: 11:20 AM
 */

namespace App\Funpacol\Entities;


use Illuminate\Database\Eloquent\Model;

class Position extends Model {


    protected $fillable = ['name', 'slug'];


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

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }


}