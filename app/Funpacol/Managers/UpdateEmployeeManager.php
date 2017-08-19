<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 21/07/17
 * Time: 9:11 AM
 */

namespace App\Funpacol\Managers;


class UpdateEmployeeManager extends BaseManager {

    public function getRules()
    {
        $id = $this->entity->id;
        if(empty($id)) {
            $rules['first_name'] = 'required|max:150';
            $rules['last_name'] = 'required|max:150';
            $rules['document_id'] = 'required';
            $rules['document'] = 'required|max:15|unique:employees,document';
            $rules['city_id'] =  'required';
            $rules['position_id'] =  'required';
            $rules['address'] = 'max:100';
            $rules['cell_phone'] = 'max:20';
            $rules['email'] = 'unique:employees,email';
            $rules['date_birthday'] = 'max:100';
        } else {
            $rules['first_name'] = 'required|max:150';
            $rules['last_name'] = 'required|max:150';
            $rules['document_id'] = 'required';
            $rules['document'] = 'required|max:15|unique:employees,document,'.$id;
            $rules['position_id'] =  'required';
            $rules['address'] = 'max:100';
            $rules['cell_phone'] = 'max:20';
            $rules['email'] = 'unique:employees,email,'.$id;
            $rules['date_birthday'] = 'max:100';
            $rules['state'] = 'required';

        }
        return $rules;
    }

}