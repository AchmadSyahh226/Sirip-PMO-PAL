<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class project extends Model
{
    use HasFactory;
    protected $fillable = ['code_project','name_project','ket_project'];
    protected $table = 'projects';
    protected $timestamp = false;
    public function milestones()
    {
        // One Project has many milestone
        return $this->belongsToMany(milestone::class)
        ->withPivot('date_milestone','date_real');
    }
    public function transaction()
    {
        // One Project has many transaction
        return $this->hasMany(buyTransaction::class);
    }
}
