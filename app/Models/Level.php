<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Project;

class Level extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable=['name','project_id'];

    public function project(){
        return $this->belongsTo(Project::class);
    }
}
