<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class material extends Model
{
    use HasFactory;
    protected $fillable = ['code_material','category_id','name_material','unit_material','ket_material'];
    protected $table = 'materials';
    protected $timestamp = false;
    public function category(){
        // Many to One Relation
        return $this->belongsTo(category::class);
    }
    public function transaction(){
        // One to Many Relation
        return $this->hasMany(buyTransaction::class);
    }
}
