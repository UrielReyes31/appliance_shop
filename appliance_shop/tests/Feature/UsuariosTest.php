<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UsuariosTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_usuario()
    {
        $response = $this->get('/usuarios');

        $response->assertStatus(200);
    }
    public function test_dellates_usuario()
    {
        $response = $this->get('/usuarios/1');

        $response->assertStatus(200);
    }
    public function test_nueva_usuario()
    {
        $response = $this->get('/usuarios/create');

        $response->assertStatus(200);
    }
    public function test_edit_usuario()
    {
        $response = $this->get('usuarios/2/edit');

        $response->assertStatus(200);
    }
}
