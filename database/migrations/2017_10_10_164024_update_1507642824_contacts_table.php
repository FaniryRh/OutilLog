<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1507642824ContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('contacts', function (Blueprint $table) {
            if(Schema::hasColumn('contacts', 'last_name')) {
                $table->dropColumn('last_name');
            }
            if(Schema::hasColumn('contacts', 'skype')) {
                $table->dropColumn('skype');
            }
            
        });
Schema::table('contacts', function (Blueprint $table) {
            if(! Schema::hasColumn('contacts', 'deleted_at')) {
                $table->softDeletes();
            }
            
        });
Schema::table('contacts', function (Blueprint $table) {
            
if (!Schema::hasColumn('contacts', 'fonction')) {
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
        Schema::table('contacts', function (Blueprint $table) {
            $table->dropColumn('fonction');
            
        });
Schema::table('contacts', function (Blueprint $table) {
            if(Schema::hasColumn('contacts', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });
Schema::table('contacts', function (Blueprint $table) {
                        $table->string('last_name')->nullable();
                $table->string('skype')->nullable();
                
        });

    }
}
