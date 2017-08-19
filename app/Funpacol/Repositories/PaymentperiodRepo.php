<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 14/07/17
 * Time: 12:41 PM
 */

namespace App\Funpacol\Repositories;


use App\Funpacol\Entities\Paymentperiod;

class PaymentperiodRepo extends BaseRepo {

    public function getModel()
    {
        return new Paymentperiod();
    }

}