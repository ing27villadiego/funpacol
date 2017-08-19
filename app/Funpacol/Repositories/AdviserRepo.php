<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 12/07/17
 * Time: 6:00 PM
 */

namespace App\Funpacol\Repositories;
use App\Funpacol\Entities\Adviser;
use Illuminate\Support\Facades\Auth;


class AdviserRepo extends BaseRepo {

    public function getModel()
    {
        return new  Adviser();
    }


    public function newAdviser()
    {
        $city = Auth::user()->city_id;
        $adviser = new Adviser();
        $adviser->state = 1;
        $adviser->city_id = $city;
        return $adviser;
    }

}