<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1508238207ContactsRegionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts_regions', function (Blueprint $table) {
            
if (!Schema::hasColumn('contacts_regions', 'fonction')) {
                $table->string('fonction');
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
        Schema::table('contacts_regions', function (Blueprint $table) {
            $table->dropColumn('fonction');
            
        });

    }
}
