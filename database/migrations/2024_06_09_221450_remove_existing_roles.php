<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RemoveExistingRoles extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        DB::table('roles')->where('name', 'admin')->delete();
        DB::table('roles')->where('name', 'user')->delete();
        DB::table('roles')->where('name', 'register')->delete();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        // If needed, you can reinsert the roles here
    }
}
