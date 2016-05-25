<?php

use Illuminate\Database\Migrations\Migration;

class AddColumnTypeToCodeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('codes', function ($table) {
            $table->string('type')->after('content');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('codes', function ($table) {
            $table->dropColumn('type');
        });
    }
}
