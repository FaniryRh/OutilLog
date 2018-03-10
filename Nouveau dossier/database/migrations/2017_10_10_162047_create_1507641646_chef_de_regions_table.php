<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1507641646ChefDeRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('chef_de_regions')) {
            Schema::create('chef_de_regions', function (Blueprint $table) {
                $table->increments('id');
                $table->string('nom_prenom')->nullable();
                $table->string('tel')->nullable();
                $table->string('tel2')->nullable();
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
        Schema::dropIfExists('chef_de_regions');
    }
}
