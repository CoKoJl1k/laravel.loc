<?php

namespace Tests\Feature;

use App\Models\Comments;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AssignmentTest extends TestCase
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

    public  function test_list_page_shows_all_comments()
    {
        $assignment = Comments::create(['title' => 'Му great assignment', 'text' => 'Му great comment']);
        $this->get('/comments')->assertSee('Му great assignment');
    }

}
