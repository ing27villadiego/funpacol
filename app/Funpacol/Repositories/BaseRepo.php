<?php namespace App\Funpacol\Repositories;

/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 19/05/17
 * Time: 11:50 AM
 */

use App\Funpacol\Entities\City;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


abstract class BaseRepo {


    protected $model;

    public function __construct()
    {
        $this->model = $this->getModel();
    }

    abstract public function getModel();

    public function cities()
    {

        return City::orderBy('name', 'asc')->pluck('name','id');

    }

    public function All()
    {
        return $this->model->all();
    }

    public function edit($id)
    {
        return $this->model->find($id);
    }

    public function update($id)
    {
        return $this->model->find($id);
    }


    public function AllTodo()
    {
        $city = Auth::user()->city_id;

        return  $this->model->select('id', DB::raw('CONCAT(first_name," ",last_name) as full_name'))
            ->where('city_id', '=', $city)
            ->orderBy('full_name')
            ->pluck('full_name', 'id');

    }

    public function AllAdviser()
    {
        $city = Auth::user()->city_id;

        return  $this->model->select('id', DB::raw('CONCAT(first_name," ",last_name) as full_name'))
            ->where('city_id', '=', $city)
            ->where('position_id', '=', 2)
            ->orderBy('full_name')
            ->pluck('full_name', 'id');
    }

    public function AllPromoter()
    {
        $city = Auth::user()->city_id;

        return  $this->model->select('id', DB::raw('CONCAT(first_name," ",last_name) as full_name'))
            ->where('city_id', '=', $city)
            ->where('position_id', '=', 1)
            ->orderBy('full_name')
            ->pluck('full_name', 'id');
    }





}