<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //
    protected $table = 'buku';
    protected $primaryKey = 'no_isbn';
    public $incrementing = false; 
    

    public $timestamps = false; 

    protected $fillable = ['no_isbn',  
                            'judul_buku',  
                            'tahun_terbit',
                            'penulis',
                            'cetakan_ke',
                            'harga',
                            'jml_eksemplar',
                            'kategori_buku',
                            'id_jb',
                            'id_penerbit',
                            'id_bhs'
                        ];
    
    public function eksemplar_buku(){
        return $this->hasMany(Eksemplar_buku::class,'no_isbn');
    }
    public function bahasa(){
        return $this->belongsTo(Bahasa::class,'id_bhs');
    }
    public function jenis_buku(){
        return $this->belongsTo(Jenis_buku::class,'id_jb');
    }
    public function penerbit(){
        return $this->belongsTo(Penerbit::class,'id_penerbit');
    }
}
