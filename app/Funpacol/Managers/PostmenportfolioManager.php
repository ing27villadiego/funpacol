<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 15/07/17
 * Time: 4:21 PM
 */

namespace App\Funpacol\Managers;


class PostmenportfolioManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'godfather_id' => 'required|unique:postmenportfolios, godfather_id',
            'postmen_id' => 'required'

        ];
        return $rules;
    }

}