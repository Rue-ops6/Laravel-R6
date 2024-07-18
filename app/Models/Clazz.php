<?php
#class is reserved by PHP. Thus, we use Clazz instead.. As we used it in model as a class, it's a necessit to name the migrations as a plural and smal of Clazz = clazzs
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clazz extends Model
{
    use HasFactory;
    protected $fillable = [
        'classTitle',
        'capacity',
        'fulled',
        'price',
        'begTime',
        'endTime',
        ];

}
