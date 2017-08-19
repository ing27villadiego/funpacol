<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 2/06/17
 * Time: 10:13 AM
 */

namespace App\Funpacol\Managers;


class ZoneManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'name' => 'required|unique:zones,name|max:100',
            'city_id' => 'required',
        ];
        return $rules;
    }

}