<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1511940935SortiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('sorties')) {
            Schema::create('sorties', function (Blueprint $table) {
                $table->increments('id');
                $table->double('quantite', 15, 2)->nullable();
                $table->string('unite')->nullable();
                $table->text('motif')->nullable();
                
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
        Schema::dropIfExists('sorties');
    }
}
