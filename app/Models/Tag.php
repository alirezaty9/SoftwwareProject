<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    use HasFactory;

    protected $table  = 'tags';
    protected $guarded = [];

    public function tags(){
        return $this->belongsToMany(Category::class , 'category_tag');
    }

    protected $hidden = [
        'created_at',
        'updated_at',
    ];
}
