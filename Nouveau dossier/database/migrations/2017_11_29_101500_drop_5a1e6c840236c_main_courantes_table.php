<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5a1e6c840236cMainCourantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('main_courantes');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('main_courantes')) {
            Schema::create('main_courantes', function (Blueprint $table) {
                $table->increments('id');
                $table->string('gdh')->nullable();
                $table->string('expeditaire')->nullable();
                $table->string('destinataire')->nullable();
                $table->text('detail')->nullable();
                $table->string('joint')->nullable();
                $table->string('photo1');
                $table->string('photo2');
                $table->text('action_entreprise')->nullable();
                $table->string('impacte_desastre')->nullable();
                $table->string('longitude')->nullable();
                $table->string('latitude')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

            $table->index(['deleted_at']);
            });
        }
    }
}
