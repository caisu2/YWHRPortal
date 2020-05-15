<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddIsNotAvailableToAvailablePositionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('available_positions', function (Blueprint $table) {
            $table->smallInteger('is_not_available')->default(0)->after('positions_desc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('available_positions', function (Blueprint $table) {
           $table->dropColumn('is_not_available');
        });
    }
}
