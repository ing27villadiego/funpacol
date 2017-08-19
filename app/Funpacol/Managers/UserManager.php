<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 11/07/17
 * Time: 3:51 PM
 */

namespace App\Funpacol\Managers;


class UserManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'name' => 'required|max:50',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'password_confirmation' => 'required|min:6',
            'first_name' => 'required|max:100',
            'last_name' => 'required|max:100',
            'city_id' => 'required'

        ];
        return $rules;

    }

}