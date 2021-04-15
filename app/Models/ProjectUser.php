<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Project;
use App\Models\Level;
class ProjectUser extends Model
{
    use HasFactory;
    protected $table='project_user';
    public function project(){

        return $this->belongsTo(Project::class);
    }
    
    public function level(){

        return $this->belongsTo(Level::class);
    }

}
