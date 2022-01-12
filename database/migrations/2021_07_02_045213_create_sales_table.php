<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSalesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('price');
            $table->string('property_name');
            $table->string('client_name');
            $table->string('agent_name');
            $table->string('branch');
            $table->string('developer');
            $table->string('category');
            $table->string('number_of_unit');
            $table->datetime('date_reserved');
            $table->foreignId('user_id')->nullableMorphs()->constrained()->onDelete('cascade');
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
        Schema::dropIfExists('sales');
    }
}
