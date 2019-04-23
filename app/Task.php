<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Project;
class Task extends Model
{
    protected $table = 'tasks';
    public function project(){
        $this->belongsTo(Project::class);
    }
}
