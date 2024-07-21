<?php
#class is reserved by PHP. Thus, we use Clazz instead.. As we used it in model as a class, it's a necessit to name the migrations as a plural and smal of Clazz = clazzs
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clazz extends Model
{
    use HasFactory;
    // protected $table = 'clazzs';  // 3l4an lw kont 3amla esm Classdata w migration clazzs fa a2ol table db esmha clazzs l2nha m4 gm3 Classdata fm4 hishofa
    protected $fillable = [
        'classTitle',
        'capacity',
        'fulled',
        'price',
        'begTime',
        'endTime',
        ];

}
