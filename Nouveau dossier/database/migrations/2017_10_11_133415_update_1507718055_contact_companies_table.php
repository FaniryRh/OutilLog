<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1507718055ContactCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contact_companies', function (Blueprint $table) {
            if(! Schema::hasColumn('contact_companies', 'deleted_at')) {
                $table->softDeletes();
            }
            
        });
Schema::table('contact_companies', function (Blueprint $table) {
            
if (!Schema::hasColumn('contact_companies', 'logo')) {
                $table->string('logo');
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
        Schema::table('contact_companies', function (Blueprint $table) {
            $table->dropColumn('logo');
            
        });
Schema::table('contact_companies', function (Blueprint $table) {
            if(Schema::hasColumn('contact_companies', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });

    }
}
