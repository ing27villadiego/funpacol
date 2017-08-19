<?php namespace App\Funpacol\Managers;

/*
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 20/05/17
 * Time: 4:27 PM
 */




class CityManager extends BaseManager {


    public function getRules()
    {
        $rules = [
            'name' => 'required|unique:cities,name|max:100',
            'letter' => 'required|unique:cities,letter|max:1'
        ];
        return $rules;

    }


}