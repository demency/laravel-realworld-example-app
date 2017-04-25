<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class UserTransformer extends TransformerAbstract
{
    /**
     * A Fractal transformer.
     *
     * @return array
     */
    public function transform(User $user)
    {
        return [
            'user' => [
                'username' => $user->name,
                'bio' => $user->bio,
                'image' => $user->image,
                'following' => false
            ]
        ];
    }
}
