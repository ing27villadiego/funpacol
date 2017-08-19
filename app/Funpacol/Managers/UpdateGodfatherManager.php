<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 14/07/17
 * Time: 3:31 PM
 */

namespace App\Funpacol\Managers;


class UpdateGodfatherManager extends BaseManager {

    public function getRules()
    {

        $id = $this->entity->id;
        if(empty($id)) {
            $rules['date_membership'] = 'required';
            $rules['code_godfather'] = 'required|unique:godfathers';
            $rules['promoter_id'] = 'required';
            $rules['adviser_id'] = 'required';
            $rules['first_name'] = 'required|max:150';
            $rules['last_name'] =  'required|max:150';
            $rules['document_id'] =  '';
            $rules['document'] =  'unique:godfathers,document';
            $rules['date_birthday'] =  '';
            $rules['email'] =  'max:150';
            $rules['address_office'] =  'max:150';
            $rules['district_office'] =  'max:150';
            $rules['address_house'] =  'required|max:100';
            $rules['district_house'] =  'max:150';
            $rules['phone_office'] =  'numeric';
            $rules['cell_phone_office'] =  'numeric';
            $rules['phone_house'] =  'numeric';
            $rules['whatsapp'] =  'numeric';
            $rules['profesion'] =  'max:150';
            $rules['charge'] =  'max:150';
            $rules['business'] =  'max:150';
            $rules['godchildren_id'] =  'required';
            $rules['paymenttype_id'] =  'required';
            $rules['paymentperiod_id'] =  'required';
            $rules['type_godfather'] =  'required';
            $rules['value_donation'] =  'required';
            $rules['day_colletion'] =  'required';

        } else {
            $rules['date_membership'] = 'required';
            $rules['code_godfather'] = 'required|unique:godfathers,code_godfather,'.$id;
            $rules['promoter_id'] = 'required';
            $rules['adviser_id'] = 'required';
            $rules['first_name'] = 'required|max:150';
            $rules['last_name'] =  'required|max:150';
            $rules['document_id'] =  '';
            $rules['document'] =  'unique:godfathers,document,'.$id;
            $rules['date_birthday'] =  '';
            $rules['email'] =  'max:150|unique:godfathers,email,'.$id;
            $rules['address_office'] =  'max:150';
            $rules['district_office'] =  'max:150';
            $rules['address_house'] =  'required|max:100';
            $rules['district_house'] =  'max:150';
            $rules['phone_office'] =  'numeric';
            $rules['cell_phone_office'] =  'numeric';
            $rules['phone_house'] =  'numeric';
            $rules['whatsapp'] =  'numeric';
            $rules['profesion'] =  'max:150';
            $rules['charge'] =  'max:150';
            $rules['business'] =  'max:150';
            $rules['godchildren_id'] =  'required';
            $rules['paymenttype_id'] =  'required';
            $rules['paymentperiod_id'] =  'required';
            $rules['type_godfather'] =  'required';
            $rules['value_donation'] =  'required';
            $rules['day_colletion'] =  'required';
            $rules['type_membership'] = 'required';
            $rules['state'] = 'required';

        }
        return $rules;
    }

}