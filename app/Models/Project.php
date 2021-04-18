<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory;
    use SoftDeletes;
    public static $rules = [
        'name' => 'required',
        // 'description'=>'',
        'start' => 'date'
    ];
    public static $messages = [
        'name.required' => 'Es necesario ingresar un nombre para el proyecto',
        'start.date' => 'La fecha no tiene un formato adecuado.'

    ];
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'description',
        'start',
    ];
    //relationships
    public function users()
    {

        return $this->belongsToMany(User::class);
    }
    public function categories()
    {
        return $this->hasMany(Category::class);
    }
    public function levels()
    {
        return $this->hasMany(Level::class);
    }


    //accesor


    public function getFirstLevelIdAttribute()
    {

        return $this->levels()->first()->id;
    }
}
