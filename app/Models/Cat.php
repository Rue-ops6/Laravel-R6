<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cat extends Model
{
    use HasFactory;


    protected $fillable = [
        'catID',
        ];


        public function student() {
            return $this->hasOne(Car::class, 'catID');
        }
}
