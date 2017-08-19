<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 13/07/17
 * Time: 11:21 AM
 */

namespace App\Funpacol\Managers;


class AdviserManager extends BaseManager {


    public function getRules()
    {
        $rules = [
            'first_name' => 'required|max:150',
            'last_name' => 'required|max:150',
            'document_id' => 'required',
            'document' => 'required|max:15|unique:advisers,document',
            'address'=> 'max:50',
            'cell_phone'=> 'max:15',
            'email'=> 'max:30|unique:advisers,email',
            'date_birthday' => '',
            'promoter_id' => 'required'

        ];
        return $rules;
    }

}