<?php

namespace App\Modules\Admin\Controllers;

use Inertia\Inertia;
use App\Bll\Constants;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Modules\Language\Models\Language;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('changeLanguage');
    }

    protected function home()
    {
        return Inertia::render('Dashboard');
    }

    protected function homeDev()
    {
        return Inertia::render('Admin/Home');
    }

    /**
     * @param string $language
     * @return RedirectResponse
     */
    protected function changeLanguage(string $language): RedirectResponse
    {
        $lang = Language::query()
            ->findOrFail($language);

        session()->forget(Constants::AdminLang);
        session()->put(Constants::AdminLang, $lang);

        return redirect()->back();
    }
}
