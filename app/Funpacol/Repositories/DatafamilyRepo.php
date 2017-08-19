<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 13/07/17
 * Time: 5:27 PM
 */

namespace App\Funpacol\Repositories;


use App\Funpacol\Entities\Datafamily;

class DatafamilyRepo extends BaseRepo {

    public function getModel()
    {
        return new Datafamily();
    }


    public function newDatafamily()
    {
        $datafamily = new Datafamily();
        $datafamily->state = 1;
        return $datafamily;
    }

}