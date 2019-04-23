<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Task;

class Project extends Model
{
    //
    protected $table = 'projects';
    protected $fillable = ['name', 'description'];

    public function tasks(){
        return $this->hasMany(Task::class, 'project_id');
    }

}
