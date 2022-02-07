<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

/**
 * Class UserTest
 * @package Tests\Feature
 * @group UserTests
 */
class UserTest extends TestCase
{

    public function testAllUsersRespondWithCorrectView()
    {
        $response = $this->get('/users');
        $response->assertViewIs('users')->assertSuccessful();
    }

    public function testAllUserNamensAreDisplayedExceptAdmins()
    {
        $response = $this->get('/users');
        $response->assertSee('test_user1')
                ->assertSee('test_user2')
                ->assertSee('test_user3')
                ->assertSee('test_user4')
                ->assertDontSee('super_admin')
                ->assertDontSee('super_admin1');
    }

    public function testAllUsersJsonData()
    {
        $response = $this->getJson('/users');
        $response->assertJson([
            ['id' => "2", 'name' => 'test_user1'],
            ['id' => "3", 'name' => 'test_user2'],
            ['id' => "5", 'name' => 'test_user3'],
            ['id' => "6", 'name' => 'test_user4'],
        ]);
    }

    public function testUserDoesNotExists()
    {
        $response = $this->getJson('/users/10');
        $response->assertJson([]);
    }

    public function testUserIsAdmin()
    {
        $response = $this->getJson('/users/1');
        $response->assertJson([]);

        $response = $this->getJson('/users/4');
        $response->assertJson([]);
    }

    public function testUserCanBeFound()
    {
        $response = $this->getJson('/users/3');
        $response->assertJson([
            'id' => 3,
            'name' => 'test_user2'
        ]);
    }
}
