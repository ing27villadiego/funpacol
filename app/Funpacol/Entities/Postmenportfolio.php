<?php
/**
 * Created by PhpStorm.
 * User: ing26sistemas
 * Date: 15/07/17
 * Time: 4:18 PM
 */

namespace App\Funpacol\Entities;



use Illuminate\Database\Eloquent\Model;

class Postmenportfolio extends Model {

    protected $fillable = ['godfather_id', 'postmen_id', 'state'];

    public function godfather()
    {
        return $this->belongsTo(Godfather::class);
    }

    public function postmen()
    {
        return $this->belongsTo(Postmen::class);
    }

}