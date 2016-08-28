<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class House extends Model
{
    protected $table = 'houses';

    public function type(){
        return $this->belongsTo(House_Type::class, 'id_type');
    }
    public function material(){
        return $this->belongsTo(Material::class,'id_material');
    }
    public function sewage(){
        return $this->belongsTo(Sewage_Type::class,'id_sewage');
    }
    public function water(){
        return $this->belongsTo(Water_Type::class,'id_water');
    }
    public function gas(){
        return $this->belongsTo(Gas_Type::class,'id_gas');
    }
    public function electricity(){
        return $this->belongsTo(Electricity_Type::class,'id_electricity');
    }
    public function state(){
        return $this->belongsTo(House_State_Type::class,'id_state');
    }
    public function region(){
        return $this->belongsTo(Region::class,'id_region');
    }
    public function reference_point(){
        return $this->belongsTo(Reference_Point::class,'id_reference_point');
    }
    public function street(){
        return $this->belongsTo(Street::class,'id_street');
    }
    public function advert(){
        return $this->belongsTo(Advert::class,'id_advert');
    }
}
