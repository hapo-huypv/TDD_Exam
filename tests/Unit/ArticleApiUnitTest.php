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
    public function test_it_can_create_an_article()
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
