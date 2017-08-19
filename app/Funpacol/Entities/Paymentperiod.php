<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 14/07/17
 * Time: 12:34 PM
 */

namespace App\Funpacol\Entities;


use Illuminate\Database\Eloquent\Model;

class Paymentperiod extends Model {

    public function godfathers()
    {
        return $this->hasMany(Godfather::class);
    }

}