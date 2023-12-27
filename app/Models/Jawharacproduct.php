<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawharacproduct extends Model
{
    use HasFactory;

    
    protected $guarded = [];

    public function Jawharacategory()
    {
        return $this->belongsTo(Jawharacategory::class,'jawharacategories_id');
    }
    public function scopegetcategoryName() {
        return Jawharacategory::where('id', $this->jawharacategories_id)->first()->title;
    }
    public function single_glass_jar_page_contents(){
        return $this->hasOne(SingleGlassJarPageContent::class, 'jawharacproducts_id');
    }
    public function single_metallic_tins_page_contents(){
        return $this->hasOne(SingleMetallicTinsPageContent::class, 'jawharacproducts_id');
    }
    public function single_pet_jar_page_contents(){
        return $this->hasOne(SinglePetJarPageContent::class, 'jawharacproducts_id');
    }
    public function single_plastic_barrels_page_contents(){
        return $this->hasOne(SinglePlasticBarrelsPageContent::class, 'jawharacproducts_id');
    }
    public function single_plastic_pails_page_contents(){
        return $this->hasOne(SinglePlasticPailsPageContent::class, 'jawharacproducts_id');
    }
    public function single_plastic_pouch_page_contents(){
        return $this->hasOne(SinglePlasticPouchPageContent::class, 'jawharacproducts_id');
    }
    
}