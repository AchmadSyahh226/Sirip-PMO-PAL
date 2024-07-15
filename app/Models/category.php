<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $fillable = ['code_category','name_category','ket_category'];
    protected $table = 'categories';
    public function materials(){
        // One to Many relation
        return $this->hasMany(material::class);
    }
}
