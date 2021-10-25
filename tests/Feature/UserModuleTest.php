<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /** @test */

    function it_loads_the_users_list_page()
    {
        $this->get('/usuarios')
            ->assertStatus(200)
            ->assertSee('Listado de usuarios')
            ->assertSee('Miguel')
            ->assertSee('Petalo')
            ->assertSee('Ana')
            ->assertSee('Carlos')
            ->assertSee('Eris');
    }

    /** @test */

    function it_shows_a_default_message_if_user_list_is_empty()
    {
        $this->get('/usuarios?empty')
            ->assertStatus(200)
            ->assertSee('No hay usuarios registrados.');
    }

    /** @test */

    function it_loads_the_user_details_page()
    {
        $this->get('/usuarios/5')
            ->assertStatus(200)
            ->assertSee('Mostrando detalles del usuario: 5');
    }

    /** @test */

    function it_create_new_user()
    {
        $this->get('/usuarios/nuevo')
            ->assertStatus(200)
            ->assertSee('Crear usuario');
    }

    /** @test */

    function it_edit_user_details()
    {
        $this->get('/usuarios/editar/5')
            ->assertStatus(200)
            ->assertSee('Editar los datos del usuario: 5');
    }
}
