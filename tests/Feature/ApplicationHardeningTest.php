<?php

use App\Livewire\Auth\Allusers;
use App\Livewire\Auth\Createblogpost;
use App\Livewire\Auth\Createcareer;
use App\Models\Blogpost;
use App\Models\Career;
use App\Models\User;
use Livewire\Livewire;

test('missing blog and career slugs return not found', function () {
    $this->get('/blog/not-a-real-post')->assertNotFound();
    $this->get('/career/not-a-real-career')->assertNotFound();
});

test('blog and career slugs are generated uniquely', function () {
    $admin = approvedAdmin();

    Livewire::actingAs($admin)
        ->test(Createblogpost::class)
        ->set('title', 'Same Title')
        ->set('body', 'First body')
        ->call('save');

    Livewire::actingAs($admin)
        ->test(Createblogpost::class)
        ->set('title', 'Same Title')
        ->set('body', 'Second body')
        ->call('save');

    Livewire::actingAs($admin)
        ->test(Createcareer::class)
        ->set('title', 'Same Role')
        ->set('body', 'First body')
        ->call('save');

    Livewire::actingAs($admin)
        ->test(Createcareer::class)
        ->set('title', 'Same Role')
        ->set('body', 'Second body')
        ->call('save');

    expect(Blogpost::pluck('slug')->all())->toBe(['same-title', 'same-title-2'])
        ->and(Career::pluck('slug')->all())->toBe(['same-role', 'same-role-2']);
});

test('admin cannot remove their own admin role or approval', function () {
    $admin = approvedAdmin();

    Livewire::actingAs($admin)
        ->test(Allusers::class)
        ->call('updateRole', $admin->id, 'manager')
        ->assertRedirect(route('allusers'));

    Livewire::actingAs($admin)
        ->test(Allusers::class)
        ->call('toggleApproval', $admin->id)
        ->assertRedirect(route('allusers'));

    expect($admin->fresh()->role)->toBe('admin')
        ->and($admin->fresh()->approved)->toBeTrue();
});

test('admin user management validates role input and keeps an approved admin', function () {
    $admin = approvedAdmin();
    $otherAdmin = approvedAdmin(['email' => 'other-admin@example.com']);

    Livewire::actingAs($admin)
        ->test(Allusers::class)
        ->call('updateRole', $otherAdmin->id, 'owner')
        ->assertRedirect(route('allusers'));

    expect($otherAdmin->fresh()->role)->toBe('admin');

    $admin->delete();

    Livewire::actingAs($otherAdmin)
        ->test(Allusers::class)
        ->call('updateRole', $otherAdmin->id, 'manager')
        ->assertRedirect(route('allusers'));

    expect($otherAdmin->fresh()->role)->toBe('admin');
});

function approvedAdmin(array $attributes = []): User
{
    return User::factory()->create(array_merge([
        'approved' => true,
        'role' => 'admin',
    ], $attributes));
}
