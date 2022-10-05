<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

class CreateFoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->integer('cuisine_id');
            $table->integer('category_id')->nullable();
            $table->string('name');
            $table->float('price');
            $table->integer('quantity');
            $table->text('details')->nullable();
            $table->string('image');
            $table->integer('discount')->default('0');
            $table->integer('status')->default('1')->comment('1 = active; 0 = deactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('foods');
    }
}
