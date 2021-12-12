<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleApiUnitTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testTtCanCreateAnArticle()
    {
        $data = [
          'title' => $this->faker->sentence,
          'content' => $this->faker->paragraph
        ];
    
        $this->post(route('articles.store'), $data)
          ->assertStatus(201)
          ->assertJson($data);
    }
}
