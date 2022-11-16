<?php

namespace App\Bll;

use Illuminate\Support\Facades\Session;
use App\Modules\Settings\Models\Setting;

class Utility
{
    public static function getDefaultSettings()
    {
        $settings = Session::get('settings');

        if (!$settings) {
            $settings = Setting::query()
                ->get()
                ->pluck('value', 'key')
                ->toArray();
            Session::put('settings', $settings);
        }

        return $settings;
    }
}
