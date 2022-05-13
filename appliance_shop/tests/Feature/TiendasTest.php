<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TiendasTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_tiendas()
    {
        $response = $this->get('/tienda');

        $response->assertStatus(200);
    }
    public function test_dellates_tienda()
    {
        $response = $this->get('/tienda/1');

        $response->assertStatus(200);
    }
    public function test_nueva_tienda()
    {
        $response = $this->get('/tienda/create');

        $response->assertStatus(200);
    }
    public function test_edit_tienda()
    {
        $response = $this->get('/tienda/1/edit');

        $response->assertStatus(200);
    }
}
