<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawharacategory extends Model
{
    use HasFactory;
    
    protected $guarded = [];

    
    public function Jawharacproduct()
    {
        return $this->hasMany(Jawharacproduct::class,'jawharacategories_id');
    }
}