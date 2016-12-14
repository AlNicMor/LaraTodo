<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameLabelsForeignKey extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('labels', function(Blueprint $table){

            $table->dropForeign('lists_user_id_foreign');

            $table->foreign('user_id')->references('id')->on('users');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('labels', function(Blueprint $table){

            $table->dropForeign('labels_user_id_foreign');

            $table->foreign('user_id')->references('id')->on('users');
        });
        //
    }
}
