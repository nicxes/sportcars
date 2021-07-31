<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVehiclesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->string('stock')->unique()->nullable();
            $table->string('vin')->unique()->nullable();

            $table->string('year')->nullable();
            $table->string('make')->nullable();
            $table->string('model')->nullable();
            $table->string('trim')->nullable();
            $table->integer('odometer')->nullable();

            $table->longText('images')->nullable();
            $table->longText('description')->nullable();
            $table->integer('price')->nullable();

            $table->string('exterior_color')->nullable();
            $table->string('interior_color')->nullable();

            $table->string('transmission')->nullable();
            $table->string('engine')->nullable();
            $table->longText('equipment')->nullable();
            $table->string('drive_train')->nullable();
            $table->string('fuel')->nullable();

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
        Schema::dropIfExists('vehicles');
    }
}
