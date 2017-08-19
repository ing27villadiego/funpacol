<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 2/06/17
 * Time: 10:14 AM
 */

namespace App\Funpacol\Repositories;
use App\Funpacol\Entities\Zone;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Str;


class ZoneRepo extends BaseRepo {

    public function getModel()
    {
        return new Zone;
    }

    public function newZone()
    {
        $zone = new Zone();
        $zone->slug = Str::slug(Input::get('name'));
        $zone->state = true;
        return $zone;

    }


}