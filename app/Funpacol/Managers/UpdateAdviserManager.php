<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 13/07/17
 * Time: 12:10 PM
 */

namespace App\Funpacol\Managers;


class UpdateAdviserManager extends BaseManager {

    public function getRules()
    {
        $id = $this->entity->id;


        if(empty($id)) {
            $rules['first_name'] = 'required|max:150';
            $rules['last_name'] = 'required|max:150';
            $rules['document_id'] = 'required';
            $rules['document'] = 'required|max:15|unique:advisers,document';
            $rules['address'] = 'max:100';
            $rules['cell_phone'] = 'max:20';
            $rules['email'] = 'unique:advisers,email';
            $rules['date_birthday'] = 'max:100';
            $rules['promoter_id'] = 'required';
        } else {
            $rules['first_name'] = 'required|max:150';
            $rules['last_name'] = 'required|max:150';
            $rules['document_id'] = 'required';
            $rules['document'] = 'required|max:15|unique:advisers,document,'.$id;
            $rules['address'] = 'max:100';
            $rules['cell_phone'] = 'max:20';
            $rules['email'] = 'unique:advisers,email,'.$id;
            $rules['date_birthday'] = 'max:100';
            $rules['promoter_id'] = 'required';
            $rules['state'] = 'required';

        }
        return $rules;
    }

}