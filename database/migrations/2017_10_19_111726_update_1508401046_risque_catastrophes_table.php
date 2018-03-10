<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1508401046RisqueCatastrophesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('risque_catastrophes', function (Blueprint $table) {
            if(Schema::hasColumn('risque_catastrophes', 'photo2')) {
                $table->dropColumn('photo2');
            }
            
        });
Schema::table('risque_catastrophes', function (Blueprint $table) {
            
if (!Schema::hasColumn('risque_catastrophes', 'photo2')) {
                $table->string('photo2');
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('risque_catastrophes', function (Blueprint $table) {
            $table->dropColumn('photo2');
            
        });
Schema::table('risque_catastrophes', function (Blueprint $table) {
                        $table->string('photo2')->nullable();
                
        });

    }
}
