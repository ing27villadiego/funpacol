<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 13/07/17
 * Time: 5:27 PM
 */

namespace App\Funpacol\Managers;


class UpdateDatafamilyManager extends BaseManager {

    public function getRules()
    {
        $id = $this->entity->id;

        if(empty($id)) {
            $rules['first_name'] = 'required|max:150';
            $rules['last_name'] = 'required|max:150';
            $rules['document_id'] = 'required';
            $rules['document'] = 'required|max:15|unique:datafamilies,document';
            $rules['address'] = 'max:100';
            $rules['cell_phone'] = 'max:20';
            $rules['date_birthday'] = 'max:100';
            $rules['city_id'] =  'required';
            $rules['number_brothers'] =  'numeric';
            $rules['name_brothers'] =  'max:250';
        } else {
            $rules['first_name'] = 'required|max:150';
            $rules['last_name'] = 'required|max:150';
            $rules['document_id'] = 'required';
            $rules['document'] = 'required|max:15|unique:datafamilies,document,'.$id;
            $rules['address'] = 'max:100';
            $rules['cell_phone'] = 'max:20';
            $rules['date_birthday'] = 'max:100';
            $rules['city_id'] =  'required';
            $rules['number_brothers'] =  'numeric';
            $rules['name_brothers'] =  'max:250';
            $rules['state'] = 'required';

        }
        return $rules;
    }

}