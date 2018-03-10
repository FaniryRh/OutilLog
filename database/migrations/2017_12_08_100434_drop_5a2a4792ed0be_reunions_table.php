<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Drop5a2a4792ed0beReunionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('reunions');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if(! Schema::hasTable('reunions')) {
            Schema::create('reunions', function (Blueprint $table) {
                $table->increments('id');
                $table->string('objet')->nullable();
                $table->datetime('date')->nullable();
                $table->text('description')->nullable();
                $table->string('rapport')->nullable();
                
                $table->timestamps();
                $table->softDeletes();

            $table->index(['deleted_at']);
            });
        }
    }
}
