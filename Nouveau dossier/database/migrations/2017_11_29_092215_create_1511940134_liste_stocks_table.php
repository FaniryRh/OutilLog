<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1511940134ListeStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('liste_stocks')) {
            Schema::create('liste_stocks', function (Blueprint $table) {
                $table->increments('id');
                $table->string('designation')->nullable();
                $table->text('description')->nullable();
                $table->double('quantite', 15, 2)->nullable();
                
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
        Schema::dropIfExists('liste_stocks');
    }
}
