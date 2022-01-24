<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Eksemplar_buku extends Model
{
    //
    protected $table = 'eksemplar_buku';
    protected $primaryKey = 'kode_buku';
    public $incrementing = false; 
    

    public $timestamps = false; 

    protected $fillable = ['kode_buku',  
                            'status',  
                            'kondisi_eksemplar',
                            'no_isbn'
                        ];

    public function buku(){
        return $this->belongsTo(Buku::class,'no_isbn');
    }
    
    public function detail_peminjaman(){
        return $this->hasMany(Detail_peminjaman::class,'kode_buku');
    }
}
