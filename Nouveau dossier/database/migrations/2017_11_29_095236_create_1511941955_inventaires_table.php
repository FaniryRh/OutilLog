<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1511941955InventairesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('inventaires')) {
            Schema::create('inventaires', function (Blueprint $table) {
                $table->increments('id');
                $table->double('quantite', 15, 2)->nullable();
                $table->string('unite')->nullable();
                $table->integer('nombre')->nullable()->unsigned();
                $table->string('destination')->nullable();
                $table->string('latitude')->nullable();
                $table->string('longitude')->nullable();
                
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
        Schema::dropIfExists('inventaires');
    }
}
