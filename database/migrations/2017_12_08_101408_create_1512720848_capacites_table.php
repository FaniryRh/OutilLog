<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1512720848CapacitesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('capacites')) {
            Schema::create('capacites', function (Blueprint $table) {
                $table->increments('id');
                $table->string('titre')->nullable();
                $table->text('description')->nullable();
                $table->string('piece_jointe')->nullable();
                
                $table->timestamps();
                
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('capacites');
    }
}
