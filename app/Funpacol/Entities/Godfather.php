<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 14/07/17
 * Time: 12:45 PM
 */

namespace App\Funpacol\Entities;


use Illuminate\Database\Eloquent\Model;
use Jenssegers\Date\Date;


class Godfather extends Model {


    protected $fillable = [
        'code_godfather',
        'date_membership',
        'promoter_id',
        'adviser_id',
        'first_name',
        'last_name',
        'document_id',
        'document',
        'date_birthday',
        'email',
        'address_office',
        'district_office',
        'phone_office',
        'cell_phone_office',
        'whatsapp',
        'profesion',
        'charge',
        'business',
        'address_house',
        'district_house',
        'phone_house',
        'department_id',
        'city_id',
        'godchildren_id',
        'community',
        'paymenttype_id',
        'paymentperiod_id',
        'type_godfather',
        'value_donation',
        'day_colletion',
        'type_membership',
        'state',
    ];


    protected $dates = ['date_birthday', 'date_membership'];


    public function paymenttype()
    {
        return $this->belongsTo(Paymenttype::class);
    }

    public function paymentperiod()
    {
        return $this->belongsTo(Paymentperiod::class);
    }

    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    public function godchildren()
    {
        return $this->belongsTo(Godchildren::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function postmenporfolio()
    {
        return $this->hasMany(Postmenportfolio::class);
    }


    public function collection()
    {
        return $this->hasMany(Collection::class);
    }

}