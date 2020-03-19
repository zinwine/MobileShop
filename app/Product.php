<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'category_id','brand_id','type_id','quantity','title','price','description','status','imgs',
    ];
}
