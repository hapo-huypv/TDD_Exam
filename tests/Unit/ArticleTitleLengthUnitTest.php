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

        if (strlen($data['title'] > 200)) {
            $this->post(route('articles.store'), $data)
            ->assertStatus(422)
            ->assertJson($data); 
        } else {
            $this->post(route('articles.store'), $data)
            ->assertStatus(201)
            ->assertJson($data); 
        }
    }
}