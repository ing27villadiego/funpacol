<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 21/07/17
 * Time: 9:27 AM
 */

namespace App\Funpacol\Managers;


class EmployeeManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'first_name' => 'required|max:150',
            'last_name' => 'required|max:150',
            'document_id' => 'required',
            'document' => 'required|max:15|unique:employees,document',
            'position_id' => 'required',
            'address'=> 'max:50',
            'cell_phone'=> 'max:15',
            'email'=> 'max:30|unique:employees,email',
            'date_birthday' => ''

        ];
        return $rules;
    }

}