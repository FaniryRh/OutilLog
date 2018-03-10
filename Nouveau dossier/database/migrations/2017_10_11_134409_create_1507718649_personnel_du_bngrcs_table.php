<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1507718649PersonnelDuBngrcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('personnel_du_bngrcs')) {
            Schema::create('personnel_du_bngrcs', function (Blueprint $table) {
                $table->increments('id');
                $table->string('photo')->nullable();
                $table->string('fonction')->nullable();
                $table->string('nom_prenom')->nullable();
                $table->string('tel')->nullable();
                $table->string('tel2')->nullable();
                $table->string('email')->nullable();
                $table->string('adresse')->nullable();
                
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
        Schema::dropIfExists('personnel_du_bngrcs');
    }
}
