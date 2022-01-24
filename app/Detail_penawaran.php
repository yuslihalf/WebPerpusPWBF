<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_penawaran extends Model
{
    //
    protected $table   = 'detail_penawaran';
    public $timestamps = false;
    public $incrementing = false;

    public function penawaran(){
        return $this->belongsTo(Penawaran::class,'id_penawaran');
    } 
    public function calon_konsumen(){
        return $this->belongsTo(Calon_konsumen::class,'id_calon_konsumen');
    } 
}
