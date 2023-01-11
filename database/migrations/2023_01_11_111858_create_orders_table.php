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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('order_id');
            $table->string('full_name');
            $table->string('email');
            $table->integer('phone_number');
            $table->longText('order');
            $table->integer('price');
            $table->date('date');
            $table->enum('status', ['in behandeling', 'verwerking', 'voltooid', 'geannuleerd'])->default('in behandeling');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
