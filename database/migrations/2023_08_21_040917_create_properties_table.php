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
        Schema::create('properties', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('name')->nullable();
            $table->string('order')->nullable();
            $table->bigInteger('price')->nullable();
            $table->text('description')->nullable();
            $table->integer('type_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->bigInteger('surface_area')->nullable();
            $table->text('image')->nullable();
            $table->text('address')->nullable();
            $table->integer('regency_id')->nullable();
            $table->integer('district_id')->nullable();
            $table->bigInteger('village_id')->nullable();
            $table->string('year')->nullable();
            $table->string('interior')->nullable();
            $table->integer('electricity')->nullable();
            $table->bigInteger('parking_lot')->nullable();
            $table->integer('id_certificate_type')->nullable();
            $table->integer('sale_type_id')->nullable();
            $table->date('created_at')->nullable();
            $table->integer('floor')->nullable();
            $table->string('developer')->nullable();
            $table->integer('room_number')->nullable();
            $table->integer('bathroom')->nullable();
            $table->string('slug')->nullable();
            $table->integer('building_area')->nullable();
            $table->string('recommended')->nullable();
            $table->string('viewers')->nullable();
            $table->string('hadap')->nullable();
            $table->string('pilihan')->nullable();
            $table->string('kt')->nullable();
            $table->string('km')->nullable();
            $table->string('lb')->nullable();
            $table->string('lt')->nullable();
            $table->string('jumlah_lantai')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
};
