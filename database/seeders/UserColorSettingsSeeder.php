<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserColorSettingsSeeder extends Seeder
{
    public function run()
    {
        DB::table('user_color_settings')->insert([
            // Light mode settings
            ['user_id' => 1, 'mode' => 'light', 'name' => 'body_bg', 'value' => '#ffffff'],
            ['user_id' => 1, 'mode' => 'light', 'name' => 'body_color', 'value' => '#000000'],
            ['user_id' => 1, 'mode' => 'light', 'name' => 'primary', 'value' => '#007bff'],
            ['user_id' => 1, 'mode' => 'light', 'name' => 'secondary', 'value' => '#6c757d'],
            ['user_id' => 1, 'mode' => 'light', 'name' => 'success', 'value' => '#28a745'],
            ['user_id' => 1, 'mode' => 'light', 'name' => 'info', 'value' => '#17a2b8'],
            ['user_id' => 1, 'mode' => 'light', 'name' => 'warning', 'value' => '#ffc107'],
            ['user_id' => 1, 'mode' => 'light', 'name' => 'danger', 'value' => '#dc3545'],
            ['user_id' => 1, 'mode' => 'light', 'name' => 'light', 'value' => '#f8f9fa'],
            ['user_id' => 1, 'mode' => 'light', 'name' => 'dark', 'value' => '#343a40'],
            ['user_id' => 1, 'mode' => 'light', 'name' => 'border_color', 'value' => '#dee2e6'],
            ['user_id' => 1, 'mode' => 'light', 'name' => 'btn_bg', 'value' => '#007bff'],
            ['user_id' => 1, 'mode' => 'light', 'name' => 'btn_border_color', 'value' => '#007bff'],
            ['user_id' => 1, 'mode' => 'light', 'name' => 'btn_hover_bg', 'value' => '#0056b3'],

            // Dark mode settings
            ['user_id' => 1, 'mode' => 'dark', 'name' => 'body_bg', 'value' => '#343a40'],
            ['user_id' => 1, 'mode' => 'dark', 'name' => 'body_color', 'value' => '#ffffff'],
            ['user_id' => 1, 'mode' => 'dark', 'name' => 'primary', 'value' => '#007bff'],
            ['user_id' => 1, 'mode' => 'dark', 'name' => 'secondary', 'value' => '#6c757d'],
            ['user_id' => 1, 'mode' => 'dark', 'name' => 'success', 'value' => '#28a745'],
            ['user_id' => 1, 'mode' => 'dark', 'name' => 'info', 'value' => '#17a2b8'],
            ['user_id' => 1, 'mode' => 'dark', 'name' => 'warning', 'value' => '#ffc107'],
            ['user_id' => 1, 'mode' => 'dark', 'name' => 'danger', 'value' => '#dc3545'],
            ['user_id' => 1, 'mode' => 'dark', 'name' => 'light', 'value' => '#f8f9fa'],
            ['user_id' => 1, 'mode' => 'dark', 'name' => 'dark', 'value' => '#343a40'],
            ['user_id' => 1, 'mode' => 'dark', 'name' => 'border_color', 'value' => '#dee2e6'],
            ['user_id' => 1, 'mode' => 'dark', 'name' => 'btn_bg', 'value' => '#007bff'],
            ['user_id' => 1, 'mode' => 'dark', 'name' => 'btn_border_color', 'value' => '#007bff'],
            ['user_id' => 1, 'mode' => 'dark', 'name' => 'btn_hover_bg', 'value' => '#0056b3'],
        ]);
    }
}
