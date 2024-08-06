<?php
#class is reserved by PHP. Thus, we use Clazz instead.. As we used it in model as a class, it's a necessit to name the migrations as a plural and smal of Clazz = clazzs
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('classes', function (Blueprint $table) {
            $table->id();
            $table->string('classTitle', 100);
            $table->integer('capacity');
            $table->boolean('fulled');
            $table->decimal('price', 6, 3);  #the decimal type if you need precision, or float for less precision but more extensive range.
            #Precision (6 in this case): The total number of digits that the number can store, including both the digits to the left and the right of the decimal point. While (3 in this case): The number of digits to the right of the decimal point.
            $table->time('begTime');
            $table->time('endTime');

            $table->string('image', 250);

            $table->softDeletes();            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classes');
}

};