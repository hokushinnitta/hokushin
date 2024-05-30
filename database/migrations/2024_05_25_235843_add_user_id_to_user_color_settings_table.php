<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddUserIdToUserColorSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user_color_settings', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('id'); // 'id' の後に 'user_id' カラムを追加
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
            $table->dropColumn('user_id');
        });
    }
}
