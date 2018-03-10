<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1508416858AssetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('assets', function (Blueprint $table) {
            if(Schema::hasColumn('assets', 'assigned_user_id')) {
                $table->dropForeign('82954_59e723e844198');
                $table->dropIndex('82954_59e723e844198');
                $table->dropColumn('assigned_user_id');
            }
            
        });
Schema::table('assets', function (Blueprint $table) {
            if(! Schema::hasColumn('assets', 'deleted_at')) {
                $table->softDeletes();
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
        Schema::table('assets', function (Blueprint $table) {
            if(Schema::hasColumn('assets', 'deleted_at')) {
                $table->dropColumn('deleted_at');
            }
            
        });
Schema::table('assets', function (Blueprint $table) {
                        
        });

    }
}
