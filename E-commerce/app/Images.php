<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //
    protected $table = 'product_image';
    protected $fillable = [
        'product_id','image_name',
    ];
    protected $guard = 'admin';
}
