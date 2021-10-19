<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class WelcomeUsersTest extends TestCase
{
    /** @test */
    public function it_welcome_users_with_nickname()
    {
        $this->get('/saludo/Miguel/SanderK')
            ->assertStatus(200)
            ->assertSee('Bienbenido Miguel, tu apodo es SanderK');
    }

    /** @test */
    public function it_welcome_users_without_nickname()
    {
        $this->get('/saludo/Miguel')
        ->assertStatus(200)
        ->assertSee('Bienbenido Miguel');
    }
}
