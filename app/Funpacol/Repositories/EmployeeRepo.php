<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 19/07/17
 * Time: 3:19 PM
 */

namespace App\Funpacol\Repositories;


use App\Funpacol\Entities\Employee;
use Illuminate\Support\Facades\Auth;

class EmployeeRepo extends BaseRepo {

    public function getModel()
    {
        return new Employee();
    }

    public function newEmployee()
    {
        $city = Auth::user()->city_id;
        $employee = new Employee();
        $employee->city_id = $city;
        $employee->state = 1;

        return $employee;

    }


}