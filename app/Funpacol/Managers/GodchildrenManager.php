<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 14/07/17
 * Time: 10:37 AM
 */

namespace App\Funpacol\Managers;


class GodchildrenManager extends BaseManager {

    public function getRules()
    {
        $rules = [
            'first_name' => 'required|max:150',
            'last_name' => 'required|max:150',
            'document_id' => '',
            'document' => 'numeric|unique:godchildrens,document',
            'datafamily_id'=> '',
            'birth_date' => ''

        ];
        return $rules;
    }


}