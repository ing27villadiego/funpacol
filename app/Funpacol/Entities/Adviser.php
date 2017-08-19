<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 12/07/17
 * Time: 5:59 PM
 */

namespace App\Funpacol\Entities;


use Illuminate\Database\Eloquent\Model;

class Adviser extends Model {


    protected $fillable  = ['first_name', 'last_name', 'document_id', 'document', 'address', 'cell_phone', 'date_birthday', 'email', 'city_id', 'promoter_id','state'];


    public function document()
    {
        return $this->belongsTo(Document::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }


    public function promoter()
    {
        return $this->belongsTo(Promoter::class);
    }

    public function godfathers()
    {
        return $this->hasMany(Godfather::class);
    }

    public function position()
    {
        return $this->belongsTo(Position::class);
    }


}