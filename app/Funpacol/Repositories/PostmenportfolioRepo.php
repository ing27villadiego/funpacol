<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 15/07/17
 * Time: 4:20 PM
 */

namespace App\Funpacol\Repositories;


use App\Funpacol\Entities\Postmenportfolio;

class PostmenportfolioRepo extends BaseRepo {

    public function getModel()
    {
        return new Postmenportfolio();
    }

}