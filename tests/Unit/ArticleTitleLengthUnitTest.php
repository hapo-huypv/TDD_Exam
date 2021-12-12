<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ArticleLengthTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testLengthOfArticle()
    {
        $data = [
            'title' => $this->faker->sentence,
            'content' => $this->faker->paragraph
          ];
  
          $this->post(route('articles.store'), $data)
            ->assertStatus(442, 'title is too long. Maximum length is 200 characters')
            ->assertJson($data); 
    }
}