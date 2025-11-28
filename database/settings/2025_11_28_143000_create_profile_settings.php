<?php

use Spatie\LaravelSettings\Migrations\SettingsMigration;

return new class extends SettingsMigration
{
    public function up(): void
    {
        $this->migrator->add('user.name', 'John Doe');
        $this->migrator->add('user.avatar', 'https://api.dicebear.com/7.x/avataaars/svg?seed=JohnDoe');
        $this->migrator->add('user.bio', 'A passionate developer and tech enthusiast.');
        $this->migrator->add('user.role', 'Full Stack Developer');
        $this->migrator->add('user.location', 'San Francisco, CA');
        $this->migrator->add('user.is_available', true);
    }
};
