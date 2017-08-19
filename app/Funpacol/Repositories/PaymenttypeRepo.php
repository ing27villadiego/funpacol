<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 14/07/17
 * Time: 12:43 PM
 */

namespace App\Funpacol\Repositories;


use App\Funpacol\Entities\Paymenttype;

class PaymenttypeRepo extends BaseRepo {

    public function getModel()
    {
        return new Paymenttype();
    }

}