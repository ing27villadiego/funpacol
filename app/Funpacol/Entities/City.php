<?php  namespace App\Funpacol\Entities;



use Illuminate\Database\Eloquent\Model;


class City extends Model
{
    protected $fillable = ['name', 'letter'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    public function zones()
    {
        return $this->hasMany(Zone::class);
    }

    public function promoters()
    {
        return $this->hasMany(Promoter::class);
    }

    public function advisers()
    {
        return $this->hasMany(Adviser::class);
    }

    public function postmens()
    {
        return $this->hasMany(Postmen::class);
    }

    public function datafamilies()
    {
        return $this->hasMany(Datafamily::class);
    }

    public function godfathers()
    {
        return $this->hasMany(Godfather::class);
    }

    public function employees()
    {
        return $this->hasMany(Employee::class);
    }

}
