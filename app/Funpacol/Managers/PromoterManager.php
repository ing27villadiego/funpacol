<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 2/06/17
 * Time: 6:20 PM
 */

namespace App\Funpacol\Managers;


class PromoterManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'first_name' => 'required|max:150',
            'last_name' => 'required|max:150',
            'document_id' => 'required',
            'document' => 'required|max:15|unique:promoters,document',
            'address'=> 'max:50',
            'cell_phone'=> 'max:15',
            'email'=> 'max:30|unique:promoters,email',
            'date_birthday' => ''

        ];
        return $rules;

    }

}