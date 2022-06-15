<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productImages extends Model
{
    use HasFactory;

    protected $table = 'product_images';
    protected $guarded = [];

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
