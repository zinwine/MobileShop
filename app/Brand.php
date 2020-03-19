<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $fillable = [
        'category_id','brand',
    ];

    public function category(){
    	return $this->belongsTo('App\Category');
    }

}
