<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGoodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('goods', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('quantity');
            $table->decimal('price');
            $table->unsignedBigInteger('pharmacy_id');
            $table->unsignedBigInteger('medicament_id');
            $table->timestamps();

            $table->foreign('pharmacy_id')
                ->references('id')
                ->on('pharmacies')
                ->onDelete('cascade');

            $table->foreign('medicament_id')
                ->references('id')
                ->on('medicaments')
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
        Schema::dropIfExists('goods');
    }
}
