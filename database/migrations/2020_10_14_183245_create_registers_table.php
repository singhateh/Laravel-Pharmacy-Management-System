<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('model_id');
            $table->decimal('cash')->default(0);
            $table->unsignedBigInteger('pharmacy_id');
            $table->timestamps();

            $table->foreign('pharmacy_id')
                ->references('id')
                ->on('pharmacies')
                ->onDelete('cascade');

            $table->foreign('model_id')
                ->references('id')
                ->on('register_models')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registers');
    }
}
