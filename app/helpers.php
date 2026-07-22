<?php

if (! function_exists('whatsapp_url')) {
    function whatsapp_url(): string
    {
        $message = __('Bonjour, je souhaite un devis pour mon projet.');

        return 'https://wa.me/243976938094?text='.rawurlencode($message);
    }
}

if (! function_exists('locale_switch_url')) {
    function locale_switch_url(): string
    {
        $targetLocale = app()->getLocale() === 'en' ? 'fr' : 'en';
        $routeName = request()->route()?->getName();

        if (! $routeName) {
            return $targetLocale === 'en' ? '/en' : '/';
        }

        $baseName = str_ends_with($routeName, '.en') ? substr($routeName, 0, -3) : $routeName;
        $targetName = $targetLocale === 'en' ? $baseName.'.en' : $baseName;

        if (! \Illuminate\Support\Facades\Route::has($targetName)) {
            return $targetLocale === 'en' ? '/en' : '/';
        }

        return route($targetName, request()->route()->parameters());
    }
}
