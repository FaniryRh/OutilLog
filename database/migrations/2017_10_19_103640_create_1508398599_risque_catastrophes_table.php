<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Create1508398599RisqueCatastrophesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(! Schema::hasTable('risque_catastrophes')) {
            Schema::create('risque_catastrophes', function (Blueprint $table) {
                $table->increments('id');
                $table->string('titre')->nullable();
                $table->string('date')->nullable();
                $table->text('bilan')->nullable();
                $table->string('piece_jointe')->nullable();
                $table->string('photo1')->nullable();
                $table->string('photo2')->nullable();
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
        Schema::dropIfExists('risque_catastrophes');
    }
}
