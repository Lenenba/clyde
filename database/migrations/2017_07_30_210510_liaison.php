<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Liaison extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::enableForeignKeyConstraints();

        Schema::table('restaurants', function (Blueprint $table) {
                $table->integer('user_id')->unsigned()->nullable();

                $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
         Schema::disableForeignKeyConstraints();

         Schema::table('restaurants', function (Blueprint $table) {

               $table->dropForeign('restaurants_user_id_foreign');
            });
        
    }
}
