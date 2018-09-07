<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateResourceResourceTypePivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resource_resource_type', function (Blueprint $table) {
            $table->integer('resource_id')->unsigned()->index();
            $table->foreign('resource_id')->references('id')->on('resources')->onDelete('cascade');
            $table->integer('resource_type_id')->unsigned()->index();
            $table->foreign('resource_type_id')->references('id')->on('resource_types')->onDelete('cascade');
            $table->primary(['resource_id', 'resource_type_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('resource_resource_type');
    }
}
