<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class milesProject extends Model
{
    use HasFactory;
    protected $fillable = ['projects_id','milestones_id','date_milestone', 'date_real'];
    protected $table = 'milestone_project';
}
