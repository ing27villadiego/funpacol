<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 13/07/17
 * Time: 1:09 PM
 */

namespace App\Funpacol\Repositories;


use App\Funpacol\Entities\Postmen;
use Illuminate\Support\Facades\Auth;

class PostmenRepo extends BaseRepo {

    public function getModel()
    {
        return new Postmen();
    }

    public function newPostmen()
    {
        $city = Auth::user()->city_id;
        $postmen = new Postmen();
        $postmen->state = 1;
        $postmen->city_id = $city;
        return $postmen;
    }
}