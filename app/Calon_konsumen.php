<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Calon_konsumen extends Model
{
    //
    protected $table = 'calon_konsumen';
    protected $primaryKey = 'id_calon_konsumen';
    public $timestamps = false;
    public $incrementing = false;

    public function negara(){
        return $this->belongsTo(Negara::class,'id_negara');
    } 
    public function detail_penawaran(){
        return $this->hasMany(Detail_penawaran::class,'id_penawaran');
    } 
}
