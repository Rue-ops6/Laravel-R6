<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
    'carTitle',
    'description',
    'price',
    'image',
    'pub',
    'catID',
    ];

    public function cat() {
        return $this->belongsTo(Cat::class, 'catID');
    }
}
