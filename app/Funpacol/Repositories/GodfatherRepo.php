<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 14/07/17
 * Time: 1:00 PM
 */

namespace App\Funpacol\Repositories;

use App\Funpacol\Entities\Godfather;
use Illuminate\Support\Facades\Auth;

class GodfatherRepo extends BaseRepo {

    public function getModel()
    {
        return new Godfather();
    }

    public function newGodfather()
    {
        $city = Auth::user()->city_id;
        $godfather = new Godfather();
        $godfather->state = 1;
        $godfather->city_id = $city;
        return $godfather;
    }

}