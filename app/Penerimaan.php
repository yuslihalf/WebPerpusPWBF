<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerimaan extends Model
{
    //
	protected $table = 'penerimaan';
    protected $primaryKey = 'id_penerimaan';
    public $timestamps = false;
    public $incrementing = false; 
    public function pegawai(){
        return $this->belongsTo(Pegawai::class,'nip');
        //return $this->belongsTo('App\Pegawai');
    }
    public function asal(){
        return $this->belongsTo(Asal::class,'id_asal');
        //return $this->belongsTo('App\Asal','id_asal');
    }
    protected $fillable = ['id_penerimaan',  
                            'tgl_penerimaan',  
                            'jml_buku_diterima',
                            'ket',
                            'nip',
                            'id_asal'
                        ];

}
