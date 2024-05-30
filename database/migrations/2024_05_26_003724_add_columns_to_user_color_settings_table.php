<?php
// database/migrations/YYYY_MM_DD_HHMMSS_add_columns_to_user_color_settings_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUserColorSettingsTable extends Migration
{
    public function up()
    {
        Schema::table('user_color_settings', function (Blueprint $table) {
            $table->string('name', 255)->after('mode');
            $table->string('value', 255)->after('name');
        });
    }

    public function down()
    {
        Schema::table('user_color_settings', function (Blueprint $table) {
            $table->dropColumn('name');
            $table->dropColumn('value');
        });
    }
}
