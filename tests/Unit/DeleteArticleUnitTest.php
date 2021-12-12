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
        $article = Article::where('title', 'test')->first();
        
        if ($article == null) {
            $this->assertTrue(false, 'Not Found');
        } else {
            $this->delete(route('articles.destroy', $article))
                ->assertStatus(200, 'Article has been deleted')
                ->assertJson($article);
        }
    }
}
