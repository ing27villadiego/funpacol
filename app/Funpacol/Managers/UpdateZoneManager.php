<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 2/06/17
 * Time: 11:41 AM
 */

namespace App\Funpacol\Managers;


class UpdateZoneManager extends BaseManager {

    public function getRules()
    {
        $id = $this->entity->id;


        if(empty($id)) {
            $rules['name'] = 'required|max:100|unique:zones,name';
            $rules['city_id'] =  'required';
        } else {
            $rules['name'] = 'required|max:100|unique:zones,name,'.$id;
            $rules['city_id'] = 'required';
        }
        return $rules;
    }

}