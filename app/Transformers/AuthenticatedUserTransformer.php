<?php

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;

class AuthenticatedUserTransformer extends TransformerAbstract
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
                'id' => (int) $user->id,
                'email' => $user->email,
                // TODO - Add JWT Token here
                // 'token' => 'jwt.token.here',
                'username' => $user->name,
                'bio' => $user->bio,
                'image' => $user->image
            ]
        ];
    }
}
