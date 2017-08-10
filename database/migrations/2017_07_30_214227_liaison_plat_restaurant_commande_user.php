<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LiaisonPlatRestaurantCommandeUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::table('commandes', function (Blueprint $table) {
                $table->integer('user_id')->unsigned();
                $table->integer('restaurant_id')->unsigned();

                $table->foreign('user_id')
                      ->references('id')->on('users')
                      ->onDelete('cascade');
                $table->foreign('restaurant_id')
                      ->references('id')->on('restaurant')
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
        Schema::table('commandes', function (Blueprint $table) {
                
                $table->dropForeign('commandes_user_id_foreign');
                $table->dropForeign('commandes_plat_id_foreign');
                $table->dropForeign('commandes_restaurant_id_foreign');
        });
    }
}
