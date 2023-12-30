<?php

namespace Tests\Feature\Livewire;

use Tests\TestCase;
use App\Models\Post;
use Livewire\Livewire;
use App\Livewire\CreatePost;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Config;


class CreatePostTest extends TestCase
{
    use RefreshDatabase;

//    public function setUp()
//    {
//        parent::setUp();
 
//        $this->artisan('migrate');
//        $this->artisan('db:seed');
//    }
 
//    public function tearDown()
//    {
//        $this->artisan('migrate:reset');
//    }





    /** @test */
    public function renders_successfully()
    {
        Livewire::test(CreatePost::class)
            ->assertStatus(200);
    }

     /** @test */
     public function can_create_new_post()
     {
        $post= Post::where('title', 'My test post')->first();
        $this->assertNull($post);
            Livewire::test(CreatePost::class)
                ->set('title', 'My test post')
                ->set('body', 'My test body')
                ->set('userId', 1)
                ->call('save')
                ->assertRedirect('/posts');

        $post= Post::where('title', 'My test post')->first();
        $this->assertNotNull($post);
        $this->assertEquals('My test post', $post->title);
        $this->assertEquals('My test body', $post->body);

     }
}
