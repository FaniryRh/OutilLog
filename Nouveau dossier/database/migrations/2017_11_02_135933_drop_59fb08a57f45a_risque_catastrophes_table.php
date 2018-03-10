<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop59fb08a57f45aRisqueCatastrophesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('risque_catastrophes');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('risque_catastrophes')) {
            Schema::create('risque_catastrophes', function (Blueprint $table) {
                $table->increments('id');
                $table->string('titre')->nullable();
                $table->datetime('date')->nullable();
                $table->text('bilan')->nullable();
                $table->string('piece_jointe')->nullable();
                $table->string('photo1')->nullable();
                $table->string('photo2');
                $table->string('latitude')->nullable();
                $table->string('longitude')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

            $table->index(['deleted_at']);
            });
        }
    }
}
