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
        // Make sure the table exists
        if (!Schema::hasTable('users')) {
            return;
        }

        // role -> One of 5 roles, we will use this to determine what they can do on the dashboard.
        // first_name
        // last_name
        // address
        // date_of_birth
        // phone_number
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['owner', 'hr', 'daymanager', 'employee', 'guest'])->default('guest')->after('password');
            $table->string('first_name')->nullable()->after('role');
            $table->string('last_name')->nullable()->after('first_name');
            $table->string('address')->nullable()->after('last_name');
            $table->date('date_of_birth')->nullable()->after('address');
            $table->integer('phone_number')->nullable()->after('email');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Make sure the table exists
        if (!Schema::hasTable('users')) {
            return;
        }

        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('role');
        });
    }
};