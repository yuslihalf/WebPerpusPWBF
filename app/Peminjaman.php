<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Peminjaman extends Model
{
    //
    protected $table = 'peminjaman';
    protected $primaryKey = 'id_peminjaman';
    public $timestamps = false;
    public $incrementing = false; 
    protected $fillable = ['id_peminjaman',  
                            'jml_buku',  
                            'tgl_pinjam',
                            'nis_nip',
                            'nip',
                        ];
                        
    public function pegawai(){
        return $this->belongsTo(Pegawai::class,'nip');
        
    }
    public function anggota(){
        return $this->belongsTo(Anggota::class,'nis_nip');
        
    }
    public function detail_peminjaman(){
        return $this->hasMany(Detail_peminjaman::class,'id_peminjaman');
    }
    public function eksemplar_buku(){
        return $this->belongsToMany(Eksemplar_buku::class,'kode_buku','','id_peminjaman');
    }
}
