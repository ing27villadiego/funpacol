<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 13/07/17
 * Time: 4:48 PM
 */

namespace App\Funpacol\Managers;


class UpdatePostmenManager extends BaseManager {

    public function getRules()
    {
        $id = $this->entity->id;


        if(empty($id)) {
            $rules['first_name'] = 'required|max:150';
            $rules['last_name'] = 'required|max:150';
            $rules['document_id'] = 'required';
            $rules['document'] = 'required|max:15|unique:postmens,document';
            $rules['address'] = 'max:100';
            $rules['cell_phone'] = 'max:20';
            $rules['email'] = 'unique:postmens,email';
            $rules['date_birthday'] = 'max:100';
        } else {
            $rules['first_name'] = 'required|max:150';
            $rules['last_name'] = 'required|max:150';
            $rules['document_id'] = 'required';
            $rules['document'] = 'required|max:15|unique:postmens,document,'.$id;
            $rules['address'] = 'max:100';
            $rules['cell_phone'] = 'max:20';
            $rules['email'] = 'unique:postmens,email,'.$id;
            $rules['date_birthday'] = 'max:100';
            $rules['state'] = 'required';

        }
        return $rules;
    }

}