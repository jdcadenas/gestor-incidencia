<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    use SoftDeletes;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //relationships
    public function projects()
    {

        return $this->belongsToMany(Project::class);
    }

    public function canTake(Incident $incident)
    {
        return ProjectUser::where('user_id',$this->id)
        ->where('level_id',$incident->level_id)
        ->first();
    }
    //accesor

    public function getListOfProjectsAttribute()
    {
        if ($this->role == 1)
            return  $this->projects;
        return Project::all();
    }

    public function getIsAdminAttribute()
    {
        return  $this->role == 0;
    }
    public function getIsClientAttribute()
    {
        return $this->role == 2;
    }

    public function getIsSupportAttribute()
    {
        return $this->role == 1;
    }
}
