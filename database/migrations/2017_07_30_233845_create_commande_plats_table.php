<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCommandePlatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commande_plats', function (Blueprint $table) {
            $table->integer('plat_id')->unsigned();
            $table->integer('commande_id')->unsigned();
            $table->integer('quantite');
            $table->double('total', 15, 8);

            $table->foreign('plat_id')
                  ->references('id')->on('plats')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('commande_id')
                  ->references('id')->on('commandes')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
        Schema::dropIfExists('commande_plats');
    }
}
