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
        Schema::create('user', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('username')->unique('username');
            $table->string('auth_key', 32);
            $table->string('password_hash');
            $table->string('password_reset_token')->nullable()->unique('password_reset_token');
            $table->string('email')->unique('email');
            $table->smallInteger('status')->default(10);
            $table->integer('created_at');
            $table->integer('updated_at');
            $table->string('verification_token')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user');
    }
};
