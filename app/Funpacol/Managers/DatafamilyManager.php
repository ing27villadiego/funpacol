<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 13/07/17
 * Time: 5:26 PM
 */

namespace App\Funpacol\Managers;


class DatafamilyManager extends BaseManager {

    public function getRules()
    {
        $rules = [

            'first_name' => 'required|max:150',
            'last_name' => 'required|max:150',
            'document_id' => 'required',
            'document' => 'required|max:15|unique:datafamilies,document',
            'address'=> 'max:100',
            'cell_phone'=> 'max:15',
            'email'=> 'max:30|unique:advisers,email',
            'city_id' => 'required',
            'date_birthday' => '',
            'number_brothers' => 'numeric',
            'name_brothers' => ''

        ];
        return $rules;
    }

}