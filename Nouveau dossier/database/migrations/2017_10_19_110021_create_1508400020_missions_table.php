<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1508400020MissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('missions')) {
            Schema::create('missions', function (Blueprint $table) {
                $table->increments('id');
                $table->string('objet')->nullable();
                $table->string('location')->nullable();
                $table->datetime('date_deb')->nullable();
                $table->datetime('date_fin')->nullable();
                $table->string('piece_jointe')->nullable();
                $table->text('description')->nullable();
                $table->string('itineraire')->nullable();
                $table->string('latitude')->nullable();
                $table->string('longitude')->nullable();
                
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
        Schema::dropIfExists('missions');
    }
}
