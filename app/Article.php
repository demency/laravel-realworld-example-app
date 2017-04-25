<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    /*
     * Get the user that owns the article.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
