<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bahasa extends Model
{
    //
    protected $table   = 'bahasa';
    protected $primaryKey = 'id_bhs';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = ['id_bhs',  
                            'nama_bhs'
                        ];
    public function buku(){
        return $this->hasMany(Buku::class,'id_bhs');
    }
}
