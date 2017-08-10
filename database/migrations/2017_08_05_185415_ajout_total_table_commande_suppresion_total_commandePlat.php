<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AjoutTotalTableCommandeSuppresionTotalCommandePlat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('commandes', function(Blueprint $table) {
                $table->double('total', 15);
            });

        Schema::table('commande_plat', function(Blueprint $table) {
                $table->dropColumn('total');
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
