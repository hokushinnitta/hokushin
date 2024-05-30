<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\UserColorSetting;

class ColorSettingsController extends Controller
{
    protected $defaultColors = [
        'light' => [
            'body_bg' => '#FFFFFF',
            'body_color' => '#000000',
            'primary' => '#0d6efd',
            'secondary' => '#6c757d',
            'success' => '#198754',
            'info' => '#0dcaf0',
            'warning' => '#ffc107',
            'danger' => '#dc3545',
            'light' => '#f8f9fa',
            'dark' => '#212529',
        ],
        'dark' => [
            'body_bg' => '#000000',
            'body_color' => '#FFFFFF',
            'primary' => '#0d6efd',
            'secondary' => '#6c757d',
            'success' => '#198754',
            'info' => '#0dcaf0',
            'warning' => '#ffc107',
            'danger' => '#dc3545',
            'light' => '#f8f9fa',
            'dark' => '#212529',
        ],
    ];

    public function index()
    {
        $userId = Auth::id();
        $colors = $this->loadColors($userId);
        return view('color-settings', compact('colors'));
    }

    public function save(Request $request)
    {
        $userId = Auth::id();
        $colors = [
            'light' => [
                'body_bg' => $request->input('light_body_bg'),
                'body_color' => $request->input('light_body_color'),
                'primary' => $request->input('light_primary'),
                'secondary' => $request->input('light_secondary'),
                'success' => $request->input('light_success'),
                'info' => $request->input('light_info'),
                'warning' => $request->input('light_warning'),
                'danger' => $request->input('light_danger'),
                'light' => $request->input('light_light'),
                'dark' => $request->input('light_dark'),
            ],
            'dark' => [
                'body_bg' => $request->input('dark_body_bg'),
                'body_color' => $request->input('dark_body_color'),
                'primary' => $request->input('dark_primary'),
                'secondary' => $request->input('dark_secondary'),
                'success' => $request->input('dark_success'),
                'info' => $request->input('dark_info'),
                'warning' => $request->input('dark_warning'),
                'danger' => $request->input('dark_danger'),
                'light' => $request->input('dark_light'),
                'dark' => $request->input('dark_dark'),
            ]
        ];

        $this->saveColors($userId, $colors);
        return redirect()->back()->with('success', 'カラー設定を保存しました');
    }

    protected function loadColors($userId)
    {
        $colors = [
            'light' => [],
            'dark' => []
        ];

        foreach (['light', 'dark'] as $mode) {
            $settings = UserColorSetting::where('user_id', $userId)->where('mode', $mode)->get();
            foreach ($settings as $setting) {
                $colors[$mode][$setting->name] = $setting->value;
            }
        }

        if (empty($colors['light'])) {
            $colors['light'] = $this->defaultColors['light'];
        }
        if (empty($colors['dark'])) {
            $colors['dark'] = $this->defaultColors['dark'];
        }

        return $colors;
    }

    protected function saveColors($userId, $colors)
    {
        foreach (['light', 'dark'] as $mode) {
            foreach ($colors[$mode] as $name => $value) {
                UserColorSetting::updateOrCreate(
                    ['user_id' => $userId, 'mode' => $mode, 'name' => $name],
                    ['value' => $value]
                );
            }
        }
    }
    public function reset()
        {
            $userId = Auth::id();
            $this->saveColors($userId, $this->defaultColors);
            return redirect()->back()->with('success', 'カラー設定をリセットしました');
        }
    
    // ColorSettingsController.php

    public function getColorSettings()
        {
            $userId = Auth::id();
            $colors = $this->loadColors();

            return response()->json([
                'colors' => $colors,
            ]);
        }



}
