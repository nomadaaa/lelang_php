<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'nama', 'category_id', 'stok', 'gambar'
    ];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
