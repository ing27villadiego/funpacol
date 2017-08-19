<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 14/07/17
 * Time: 8:54 AM
 */

namespace App\Funpacol\Repositories;


use App\Funpacol\Entities\Godchildren;

class GodchidrenRepo extends BaseRepo {


    public function getModel()
    {
        return new Godchildren();
    }


    public function newGodchildren()
    {
        $godchildren = new Godchildren();
        $godchildren->state = 1;
        $godchildren->city_id = 1;
        return $godchildren;
    }



}