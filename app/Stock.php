<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    //
    protected $fillable = [
        'district',
        'parish',
        'produce_item',
        'kilogrames',
        'is_certified',
        'is_verified'       
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }


}
