<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class UnitTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_store_category()
    {
        $response = $this->post('category/store');

        $response->assertStatus(302);
    }
    public function test_category_create()
    {
        $response = $this->get('category/create');

        $response->assertStatus(200);
    }


    public function test_store_store()
    {
        $response = $this->get('stores/store');

        $response->assertStatus(500);
    }


    public function test_index_stores()
    {
        $response = $this->get('stores/index');

        $response->assertStatus(200);
    }


    public function test_index_rating()
    {
        $response = $this->get('rating/index');

        $response->assertStatus(200);
    }
}