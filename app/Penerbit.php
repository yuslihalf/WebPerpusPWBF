<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penerbit extends Model
{
    //
    protected $table   = 'penerbit';
    protected $primaryKey = 'id_penerbit';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = ['id_penerbit',  
                            'nama_penerbit',  
                            'alamat_penerbit',
                            'no_telp_penerbit',
                            'email_penerbit'
                        ];
    public function buku(){
        return $this->hasMany(Buku::class,'id_penerbit');
    }
}
