<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1508400982RisqueCatastrophesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('risque_catastrophes', function (Blueprint $table) {
            if(Schema::hasColumn('risque_catastrophes', 'date')) {
                $table->dropColumn('date');
            }
            
        });
Schema::table('risque_catastrophes', function (Blueprint $table) {
            
if (!Schema::hasColumn('risque_catastrophes', 'date')) {
                $table->datetime('date')->nullable();
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
            $table->dropColumn('date');
            
        });
Schema::table('risque_catastrophes', function (Blueprint $table) {
                        $table->string('date')->nullable();
                
        });

    }
}
