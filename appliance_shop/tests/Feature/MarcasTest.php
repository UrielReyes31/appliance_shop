<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class MarcasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }
    public function test_index_marca()
    {
        $response = $this->get('/marcas');

        $response->assertStatus(200);
    }
    public function test_dellates_marca()
    {
        $response = $this->get('/marcas/1');

        $response->assertStatus(200);
    }
    public function test_nueva_marca()
    {
        $response = $this->get('/marcas/create');

        $response->assertStatus(200);
    }
    public function test_edit_marca()
    {
        $response = $this->get('marcas/2/edit');

        $response->assertStatus(200);
    }
}
