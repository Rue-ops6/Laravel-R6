<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'class',
        'address',
        'phoneID',
        ];


        public function phone() {
            return $this->belongsTo(Phone::class, 'phoneID');
        }

}
