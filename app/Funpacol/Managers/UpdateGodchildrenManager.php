<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 14/07/17
 * Time: 10:37 AM
 */

namespace App\Funpacol\Managers;


class UpdateGodchildrenManager extends BaseManager {


    public function getRules()
    {
        $id = $this->entity->id;
        if(empty($id)) {
            $rules['first_name'] = 'required|max:150';
            $rules['last_name'] = 'required|max:150';
            $rules['document_id'] = '';
            $rules['document'] = 'numeric|unique:godchildrens,document';
            $rules['birth_date'] = '';
            $rules['datafamily_id'] =  '';

        } else {
            $rules['first_name'] = 'required|max:150';
            $rules['last_name'] = 'required|max:150';
            $rules['document_id'] = '';
            $rules['document'] = 'numeric|unique:godchildrens,document,'.$id;
            $rules['birth_date'] = '';
            $rules['datafamily_id'] =  '';
            $rules['state'] = 'required';

        }
        return $rules;
    }

}