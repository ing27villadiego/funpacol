<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 13/07/17
 * Time: 5:26 PM
 */

namespace App\Funpacol\Entities;


use Illuminate\Database\Eloquent\Model;

class Datafamily extends Model {

    protected $fillable = [
        'first_name',
        'last_name',
        'document_id',
        'document',
        'city_id',
        'address',
        'cell_phone',
        'date_birthday',
        'number_brothers',
        'name_brothers',
        'state'
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    public function godchildrens()
    {
        return $this->hasMany(Godchildren::class);
    }


}