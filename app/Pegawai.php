<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    //
    protected $table = 'pegawai';
    protected $primaryKey = 'nip';
    public $incrementing = false; 
    
    protected $fillable = [ 'nip',  
                            'nama_pegawai',  
                            'email_pegawai', 
                            'password',
                            'status' 
                        ];

    public $timestamps = false; 

    public function penerimaan(){
        return $this->hasMany(Penerimaan::class,'nip');
    } 
    public function peminjaman(){
        return $this->hasMany(Peminjaman::class,'nip');
    }                    

} 

