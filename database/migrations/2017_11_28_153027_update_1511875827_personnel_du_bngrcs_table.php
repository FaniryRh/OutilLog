<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1511875827PersonnelDuBngrcsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personnel_du_bngrcs', function (Blueprint $table) {
            if(Schema::hasColumn('personnel_du_bngrcs', 'date_embauche')) {
                $table->dropColumn('date_embauche');
            }
            
        });
Schema::table('personnel_du_bngrcs', function (Blueprint $table) {
            
if (!Schema::hasColumn('personnel_du_bngrcs', 'date_embauche')) {
                $table->date('date_embauche')->nullable();
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
            $table->dropColumn('date_embauche');
            
        });
Schema::table('personnel_du_bngrcs', function (Blueprint $table) {
                        $table->date('date_embauche')->nullable();
                
        });

    }
}
