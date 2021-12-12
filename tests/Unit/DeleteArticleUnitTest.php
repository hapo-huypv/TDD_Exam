<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Models\Article;


class DeleteArticleTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testDeleteAnArticle()
    {
        $article = Article::where('title', 'tdd1')->first();

        if (!$article) {
            $this->delete(route('articles.destroy, [$article]'))
                ->assertStatus(404, 'Not Found')
                ->assertJson($data);
        } else {
            $this->delete(route('articles.destroy, [$article]'))
                ->assertStatus(404, 'Article has been deleted')
                ->assertJson($data);
        }
    }
}