<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RenameTasksTableColumn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function(Blueprint $table){

            $table->dropForeign(['list_id']);

            $table->renameColumn('list_id', 'label_id');

            $table->foreign('label_id')->references('id')->on('labels');
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
        Schema::table('tasks', function(Blueprint $table){

            $table->dropForeign(['label_id']);

            $table->renameColumn('label_id', 'list_id');

            $table->foreign('list_id')->references('id')->on('labels');
        });
        //
    }
}
