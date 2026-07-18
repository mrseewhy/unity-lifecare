<?php

use App\Models\User;

test('unapproved users cannot access the dashboard', function () {
    $user = User::factory()->create(['approved' => false]);

    $this->actingAs($user)
        ->get('/dashboard')
        ->assertRedirect(route('home'));

    $this->assertGuest();
});

test('approved managers cannot access user management', function () {
    $user = User::factory()->create([
        'approved' => true,
        'role' => 'manager',
    ]);

    $this->actingAs($user)
        ->get('/dashboard/users/all')
        ->assertForbidden();
});

test('approved admins can access user management', function () {
    $user = User::factory()->create([
        'approved' => true,
        'role' => 'admin',
    ]);

    $this->actingAs($user)
        ->get('/dashboard/users/all')
        ->assertOk();
});
