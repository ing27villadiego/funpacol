<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 11/07/17
 * Time: 6:04 PM
 */

namespace App\Funpacol\Managers;


class UpdateUserManager extends BaseManager {

    public function getRules()
    {
        $id = $this->entity->id;


        if(empty($id)) {
            $rules['name'] = 'required|max:50';
            $rules['email'] = 'required|email|unique:users,email';
            $rules['password'] = 'required|min:6|confirmed';
            $rules['password_confirmation'] = 'required|min:6';
            $rules['first_name'] = 'required|max:100';
            $rules['last_name'] = 'required|max:100';
            $rules['city_id'] =  'required';
        } else {
            $rules['name'] = 'required|max:50';
            $rules['email'] = 'required|email|unique:users,email,'.$id;
            $rules['city_id'] =  'required';
            $rules['state'] = 'required';
            $rules['first_name'] = 'required|max:100';
            $rules['last_name'] = 'required|max:100';
            $rules['password'] = '';
            $rules['password_confirmation'] = '';

        }
        return $rules;
    }
}