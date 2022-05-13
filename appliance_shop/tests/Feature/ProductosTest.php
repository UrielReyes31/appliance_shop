<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProductosTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_prod()
    {
        $response = $this->get('/productos');

        $response->assertStatus(200);
    }
    public function test_dellates_prod()
    {
        $response = $this->get('/productos/2');

        $response->assertStatus(200);
    }
    public function test_nuevo_prod()
    {
        $response = $this->get('/productos/create');

        $response->assertStatus(200);
    }
    public function test_edit_prod()
    {
        $response = $this->get('/productos/1/edit');

        $response->assertStatus(200);
    }
}
