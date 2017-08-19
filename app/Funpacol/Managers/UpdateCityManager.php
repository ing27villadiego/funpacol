<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 26/05/17
 * Time: 9:27 AM
 */

namespace App\Funpacol\Managers;


class UpdateCityManager extends BaseManager {

    public function getRules()
    {
        $id = $this->entity->id;

        if(empty($id)) {
            $rules['name'] =  'required|max:150|unique:cities,name';
            $rules['letter'] =  'required|max:1|unique:cities,letter';
        } else {
            $rules['name'] = 'required|max:150|unique:cities,name,'.$id;
            $rules['letter'] = 'required|max:1|unique:cities,letter,'.$id;
        }
        return $rules;
    }

}