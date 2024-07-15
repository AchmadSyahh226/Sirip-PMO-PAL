<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class milestone extends Model
{
    use HasFactory;
    protected $fillable = ['projects_id','name_milestone','ket_milestone', 'percent_milestone'];
    protected $table = 'milestones';
    public function projects()
    {
        return $this->belongsToMany(project::class)
        ->withPivot('date_milestone','date_real');
    }
}
