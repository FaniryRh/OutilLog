<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1508243539ListeGroupeSectorielsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('liste_groupe_sectoriels')) {
            Schema::create('liste_groupe_sectoriels', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nom_prenom')->nullable();
                $table->string('fonction')->nullable();
                $table->string('tel')->nullable();
                $table->string('email')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

                $table->index(['deleted_at']);
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
        Schema::dropIfExists('liste_groupe_sectoriels');
    }
}
