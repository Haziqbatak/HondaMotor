<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'warna',
        'image',
        'price'
    ];

    public function product () {
        return $this->belongsTo(Honda::class);
    }

    public function image() : Attribute{
        return Attribute::make(
            get: fn($value) => asset('/storage/product/' . $value)
        );
    }
}
