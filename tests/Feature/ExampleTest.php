<?php
 
namespace Tests\Feature;
 
use Tests\TestCase;
 
class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_check_if_access_home_is_ok(): void
    {
        $response = $this->get('/');
 
        $response->assertStatus(500);
    }

    public function test_check_if_access_dashboard_is_ok(): void
    {
        $response = $this->get('/dashboard');
 
        $response->assertStatus(200);
    }

    public function test_check_if_access_users_is_ok(): void
    {
        $response = $this->get('users');
 
        $response->assertStatus(500);
    }

    public function test_check_if_access_products_is_ok(): void
    {
        $response = $this->get('products');
 
        $response->assertStatus(500);
    }

    public function test_check_if_access_about_is_ok(): void
    {
        $response = $this->get('/about');
 
        $response->assertStatus(200);
    }

    public function test_check_if_access_login_is_ok(): void
    {
        $response = $this->get('/login');
 
        $response->assertStatus(200);
    }

    public function test_check_if_access_car_shop_is_ok(): void
    {
        $response = $this->get('/car-shop');
 
        $response->assertStatus(200);
    }
}