<?php

namespace Tests\Feature\Auth;

test('public registration redirects to login', function () {
    $this->get('/register')
        ->assertRedirect('/login');
});
