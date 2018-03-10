<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1512720046OmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('oms')) {
            Schema::create('oms', function (Blueprint $table) {
                $table->increments('id');
                $table->string('destination')->nullable();
                $table->string('itineraire')->nullable();
                $table->datetime('depart')->nullable();
                $table->integer('duree')->nullable()->unsigned();
                $table->string('fichier_om')->nullable();
                $table->string('rapport_de_mission')->nullable();
                $table->datetime('remise_rapport')->nullable();
                
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
        Schema::dropIfExists('oms');
    }
}
