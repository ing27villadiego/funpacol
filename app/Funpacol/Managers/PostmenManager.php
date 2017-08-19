<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 13/07/17
 * Time: 3:52 PM
 */

namespace App\Funpacol\Managers;


class PostmenManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'first_name' => 'required|max:150',
            'last_name' => 'required|max:150',
            'document_id' => 'required',
            'document' => 'required|max:15|unique:postmens,document',
            'address'=> 'max:50',
            'cell_phone'=> 'max:15',
            'email'=> 'max:100',
            'date_birthday' => ''

        ];
        return $rules;
    }

}