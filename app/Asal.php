<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Asal extends Model
{
    //
    protected $table = 'asal';
    protected $primaryKey ='id_asal';
    public $timestamps = false;
    public $incrementing = false;

    protected $fillable = ['id_asal',  
                            'asal'
                        ];

    public function penerimaan(){
        return $this->hasMany(Penerimaan::class,'id_asal');
    }
}
