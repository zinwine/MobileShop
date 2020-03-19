<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $fillable=[
    	'type','category_id',
    ];
    public function category(){
    	return $this->belongsTo('App\Category');
    }
}
