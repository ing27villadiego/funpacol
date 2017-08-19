<?php namespace App\Funpacol\Repositories;

/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 19/05/17
 * Time: 12:06 PM
 */


use App\Funpacol\Entities\User;


class UserRepo extends BaseRepo {

    public function getModel()
    {
        return new User;
    }


    public function newUser()
    {
        $user = new User();
        $user->state = 1;
        return $user;

    }

}