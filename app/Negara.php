<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    //
    protected $table = 'negara';
    protected $primaryKey = 'id_negara';
    public $timestamps = false;
    public $incrementing = false;

    public function calon_konsumen(){
        return $this->hasMany(Calon_konsumen::class,'id_negara');
    } 
}
