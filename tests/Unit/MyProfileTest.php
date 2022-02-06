<?php

namespace Tests\Unit;

use Tests\TestCase;

class MyProfileTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_my_profile()
    {
        $response = $this->get('/my-profile');
        
        // $response->assertSuccessful();
        $response->assertStatus(302);
        $response->assertRedirect('/login');
        $this->followingRedirects();
    }
}
