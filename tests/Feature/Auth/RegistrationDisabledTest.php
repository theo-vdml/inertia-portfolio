<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;

beforeEach(function () {
    if (Features::enabled(Features::registration())) {
        $this->markTestSkipped('Registration feature is enabled. These tests require registration to be disabled.');
    }
});

test('registration screen cannot be rendered when registration is disabled', function () {
    if (Route::has('register')) {
        $response = $this->get(route('register'));
        $response->assertNotFound();
    } else {
        expect(Route::has('register'))->toBeFalse();
    }
});

test('users cannot register when registration is disabled', function () {
    if (Route::has('register.store')) {
        $response = $this->post(route('register.store'), [
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $response->assertNotFound();
        $this->assertGuest();
        $this->assertDatabaseMissing('users', [
            'email' => 'test@example.com',
        ]);
    } else {
        expect(Route::has('register.store'))->toBeFalse();
    }
});
