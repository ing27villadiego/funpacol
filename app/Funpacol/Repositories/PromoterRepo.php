<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 2/06/17
 * Time: 2:25 PM
 */

namespace App\Funpacol\Repositories;


use App\Funpacol\Entities\Promoter;
use Illuminate\Support\Facades\Auth;


class PromoterRepo extends BaseRepo {

    public function getModel()
    {
        return new Promoter();
    }

    public function newPromoter()
    {
        $city = Auth::user()->city_id;
        $promoter = new Promoter();
        $promoter->city_id = $city;
        $promoter->state = 1;

        return $promoter;
    }

}