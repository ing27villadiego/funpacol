<?php namespace App\Funpacol\Repositories;

/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 19/05/17
 * Time: 11:53 AM
 */


use  App\Funpacol\Entities\City;

use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;

class CityRepo extends BaseRepo {

    public function getModel()
    {
        return new City;
    }

    public function newCity()
    {
        $city = new City();
        $city->slug = Str::slug(Input::get('name'));
        $city->state = true;
        return $city;
    }


}