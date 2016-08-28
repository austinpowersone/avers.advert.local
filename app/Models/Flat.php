<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Flat extends Model
{
    protected $table = 'flats';

    public function type(){
        return $this->belongsTo(Flat_Type::class,'id_type');
    }
    public function schema(){
        return $this->belongsTo(Flat_Schema::class,'id_schema');
    }
    public function material(){
        return $this->belongsTo(Material::class,'id_material');
    }
    public function bathroom(){
        return $this->belongsTo(Bathroom_Type::class,'id_bathroom_type');
    }
    public function balcony(){
        return $this->belongsTo(Balcony_Type::class,'id_balcony_type');
    }
    public function state(){
        return $this->belongsTo(Flat_State_Type::class, 'id_state');
    }
    public function reference_point(){
        return $this->belongsTo(Reference_Point::class, 'id_reference_point');
    }
    public function street(){
        return $this->belongsTo(Street::class,'id_street');
    }
    public function advert(){
        return $this->belongsTo(Advert::class,'id_advert');
    }
    public function region(){
        return $this->belongsTo(Region::class,'id_region');
    }
}
