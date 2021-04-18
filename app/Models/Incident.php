<?php

namespace App\Models;
use App\Models\Project;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Incident extends Model
{
   // use HasFactory;
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function support()
    {
        return $this->belongsTo(User::class,'support_id');
    }
    public function client()
    {
        return $this->belongsTo(User::class,'client_id');
    }
    //accesor

    public function getSeverityFullAttribute()
    {
        switch ($this->severity) {
            case 'M':
                return 'Menor';
                break;
            case 'N':
                return 'Normal';
                break;
            default:
                return 'Alta';
                break;
        }
    }

    public function getTitleShortAttribute()
    {
        return mb_strimwidth($this->title,0,20,'...');
    }

    public function getCategoryNameAttribute()
    {

        if($this->category){
            return $this->category->name;
        }
        return 'General';
    }
    public function getSupportNameAttribute()
    {
        if($this->support)
            return $this->support->name;
        return 'Sin asignar';
    }
}
