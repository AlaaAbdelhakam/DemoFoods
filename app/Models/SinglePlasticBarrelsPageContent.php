<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SinglePlasticBarrelsPageContent extends Model
{
    use HasFactory;

    protected $guarded = [];
    public function product()
    {
        return $this->belongsTo(App\Models\Jawharacproduct::class);
    }
}