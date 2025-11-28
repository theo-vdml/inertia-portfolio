<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class SiteSettings extends Settings
{
    public string $site_name;
    public string $site_description;

    public static function group(): string
    {
        return 'core';
    }
}
