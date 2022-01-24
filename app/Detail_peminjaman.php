<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_peminjaman extends Model
{
    //
    protected $table   = 'det_peminjaman';
    public $timestamps = false;
    public $incrementing = false;
    protected $fillable = ['kode_buku',
                            'id_peminjaman',	
                            'status_peminjaman',	
                            'denda_perbuku',	
                            'tgl_harusKembali',	
                            'tgl_kembali',
                            'perpanjangan',	
                            'status_verif'	
                        ];
    
    public function peminjaman(){
        return $this->belongsTo(Peminjaman::class,'id_peminjaman');
    } 
    public function eksemplar_buku(){
        return $this->belongsTo(Eksemplar_buku::class,'kode_buku');
    } 
}
