<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 12/07/17
 * Time: 5:25 PM
 */

namespace App\Funpacol\Managers;


class UpdatePromoterManager extends BaseManager {

    public function getRules()
    {
        $id = $this->entity->id;


        if(empty($id)) {
            $rules['first_name'] = 'required|max:150';
            $rules['last_name'] = 'required|max:150';
            $rules['document_id'] = 'required';
            $rules['document'] = 'required|max:15|unique:promoters,document';
            $rules['address'] = 'max:100';
            $rules['cell_phone'] = 'max:20';
            $rules['email'] = 'unique:promoters,email';
            $rules['date_birthday'] = 'max:100';
            $rules['city_id'] =  'required';
        } else {
            $rules['first_name'] = 'required|max:150';
            $rules['last_name'] = 'required|max:150';
            $rules['document_id'] = 'required';
            $rules['document'] = 'required|max:15|unique:promoters,document,'.$id;
            $rules['address'] = 'max:100';
            $rules['cell_phone'] = 'max:20';
            $rules['email'] = 'unique:promoters,email,'.$id;
            $rules['date_birthday'] = 'max:100';
            $rules['state'] = 'required';

        }
        return $rules;
    }

}