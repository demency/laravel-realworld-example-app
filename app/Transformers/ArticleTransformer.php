<?php

namespace App\Transformers;

use App\Article;
use League\Fractal\TransformerAbstract;

class ArticleTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(Article $article)
    {
        return [
            'slug' => $article->slug,
            'title' => $article->title,
            'description' => $article->description,
            'body' => $article->body,
            //'favorited' => true,
            //'favoritesCount' => (int) 0,
            'author' => [
                'username' => $article->user->username,
                'bio' => $article->user->bio,
                'image' => $article->user->image,
                // 'following' => true,
            ]
        ];
    }
}
