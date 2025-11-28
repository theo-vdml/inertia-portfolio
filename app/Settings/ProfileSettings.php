<?php

namespace App\Settings;

use Spatie\LaravelSettings\Settings;

class ProfileSettings extends Settings
{
    public string $name;
    public string $avatar;
    public string $bio;
    public string $role;
    public string $location;
    public bool $is_available;

    public static function group(): string
    {
        return 'user';
    }
}
