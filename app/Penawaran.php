<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penawaran extends Model
{
    //
    protected $table   = 'penawaran';
    protected $primaryKey = 'id_penawaran';
    public $timestamps = false;
    public $incrementing = false;

    public function detail_penawaran(){
        return $this->hasMany(Detail_penawaran::class,'id_penawaran');
    } 
    public function calon_konsumen(){
        return $this->belongsToMany(Calon_konsumen::class,'detail_penawaran','id_calon_konsumen','id_penawaran');
    } 
}
