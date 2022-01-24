<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jenis_buku extends Model
{
    //
    protected $table   = 'jenis_buku';
    protected $primaryKey = 'id_jb';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = ['id_jb',  
                            'nama_jb',  
                            'kode_jb'
                        ];
    public function buku(){
        return $this->hasMany(Buku::class,'id_jb');
    }
}
