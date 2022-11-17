<?php

namespace App\Http\Middleware;

use Closure;
use App\Bll\Lang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Session;

class SetLocale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $segment = $request->segment(1);
        $supportedLocales = Config::get('app.supported-locales');
        if ($segment && in_array($segment, $supportedLocales) && strlen($segment) == 2) {
            $code = $segment;
        } else {
            $code = Lang::getAdminLangCode();
        }

        App::setLocale($code);

        Session::put('locale', $code);

        return $next($request);
    }
}
