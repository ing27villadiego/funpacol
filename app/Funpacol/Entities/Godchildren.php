<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 14/07/17
 * Time: 8:54 AM
 */

namespace App\Funpacol\Entities;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Godchildren extends Model {




    protected $fillable = ['first_name', 'last_name', 'document_id', 'document', 'birth_date', 'datafamily_id', 'city_id', 'state' ];

    protected $dates = ['birth_date'];

    public function setBirthDateAttribute($date)
    {
         return $this->attributes['birth_date'] = Carbon::parse($date);
    }

    public function getBirthDateAttribute($date)
    {
        return $this->attributes['birth_date'] = Carbon::parse($date);
    }


    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function datafamily()
    {
        return $this->belongsTo(Datafamily::class);
    }

    public function godfathers()
    {
        return $this->hasMany(Godfather::class);
    }



}