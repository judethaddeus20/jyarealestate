<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('price');
            $table->decimal('latitude', 10, 8);
            $table->decimal('longitude', 11, 8);
            $table->longText('description');
            $table->integer('rooms');
            $table->string('developer');
            $table->string('location');
            $table->string('url');
            $table->unsignedInteger('province')->nullable()->constrained()->onDelete('cascade');
            $table->unsignedInteger('city')->nullable()->constrained()->onDelete('cascade');
            
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
        Schema::dropIfExists('properties');
    }
}
