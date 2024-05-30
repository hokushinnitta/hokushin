<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddModeToUserColorSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_color_settings', function (Blueprint $table) {
            $table->string('mode')->after('user_id'); // 'user_id' の後に 'mode' カラムを追加
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('user_color_settings', function (Blueprint $table) {
            $table->dropColumn('mode');
        });
    }
}
