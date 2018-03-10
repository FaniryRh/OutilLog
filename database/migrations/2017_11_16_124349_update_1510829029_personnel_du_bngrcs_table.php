<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1510829029PersonnelDuBngrcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personnel_du_bngrcs', function (Blueprint $table) {
            
if (!Schema::hasColumn('personnel_du_bngrcs', 'latitude')) {
                $table->string('latitude');
                }
if (!Schema::hasColumn('personnel_du_bngrcs', 'longitude')) {
                $table->string('longitude');
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
        Schema::table('personnel_du_bngrcs', function (Blueprint $table) {
            $table->dropColumn('latitude');
            $table->dropColumn('longitude');
            
        });

    }
}
