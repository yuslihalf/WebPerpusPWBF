<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Anggota extends Model
{
    //
    protected $table = 'anggota';
    protected $primaryKey = 'nis_nip';
    public $incrementing = false; 
    

    public $timestamps = false; 

    protected $fillable = [
                            'nama_anggota',  
                            'tahun_masuk',
                            'kelas',
                            'email_anggota',
                            'password',
                            'status'
                        ];
    
    public function peminjaman(){
        return $this->hasMany(Peminjaman::class,'nis_nip');
    }
}
