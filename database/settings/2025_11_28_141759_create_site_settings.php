<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('core.site_name', 'My Awesome Site');
        $this->migrator->add('core.site_description', 'The best site ever built with Laravel.');
    }
};
