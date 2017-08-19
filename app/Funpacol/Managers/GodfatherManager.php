<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 14/07/17
 * Time: 3:31 PM
 */

namespace App\Funpacol\Managers;


class GodfatherManager extends BaseManager {

    public function getRules()
    {

        $rules = [
            'date_membership'=> 'required',
            'code_godfather'=> 'required|unique:godfathers',
            'promoter_id'=> 'required',
            'adviser_id'=> 'required',
            'first_name' => 'required|max:150',
            'last_name' => 'required|max:150',
            'document_id' => '',
            'document' => 'unique:godfathers,document',
            'date_birthday' => '',
            'email' => '',
            'address_office' => 'max:150',
            'district_office' => 'max:150',
            'address_house'=> 'required|max:100',
            'district_house' => 'max:150',
            'phone_office' => 'numeric',
            'cell_phone_office' => 'numeric',
            'phone_house' => 'numeric',
            'whatsapp' => 'numeric',
            'profesion' => 'max:150',
            'charge' => 'max:150',
            'business' => 'max:100',
            'godchildren_id'=> 'required',
            'paymenttype_id'=> 'required',
            'paymentperiod_id'=> 'required',
            'type_godfather'=> 'required',
            'value_donation'=> 'required',
            'type_membership' => 'required',
            'day_colletion'=> 'required|numeric',


        ];
        return $rules;


    }

}