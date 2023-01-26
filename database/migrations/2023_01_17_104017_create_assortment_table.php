<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assortment', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('category'); // Perhaps turn this into an enum? - Rico
            $table->string('product_name');
            $table->decimal('price');
            $table->string('description');
            $table->string('image');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assortment');
    }
};
