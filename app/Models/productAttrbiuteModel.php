<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productAttrbiuteModel extends Model
{
    use HasFactory;

    protected $table = 'product_attributes';
    protected $guarded = [];

    public function attribute(){
        return $this->belongsTo(Attribute::class);
    }

    protected $hidden = [
        'created_at',
        'updated_at',
    ];

}
