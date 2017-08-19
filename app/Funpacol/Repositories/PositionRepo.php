<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 21/07/17
 * Time: 8:40 AM
 */

namespace App\Funpacol\Repositories;


use App\Funpacol\Entities\Position;

class PositionRepo extends BaseRepo {

    public function getModel()
    {
        return new Position();
    }

}