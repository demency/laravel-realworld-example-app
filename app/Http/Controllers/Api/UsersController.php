<?php

namespace App\Http\Controllers\Api;

use Auth;
use App\User;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UserAuthenticationRequest;
use App\Http\Requests\Api\UserRegistrationRequest;
use App\Transformers\UserTransformer;
use App\Transformers\AuthenticatedUserTransformer;

class UsersController extends Controller
{
    public function authentication(UserAuthenticationRequest $request) {
        // Stateless require Auth::once instead Auth::attempt
        if (Auth::once([
            'email' => $request->get('user')["email"],
            'password' => $request->get('user')["password"]
        ])) {
            // Once authenticated, get the authenticated user based on email.
            $authenticatedUser = User::where('email', $request->get('user')["email"])->firstOrFail();
            // Transform this user to complaint the API spec.
            $transformedUser = fractal($authenticatedUser, new AuthenticatedUserTransformer())->toArray();
            // Mount data to response
            return response()->json($transformedUser);
        }
    }

    public function registration(UserRegistrationRequest $request) {
        // User registration
        $user = User::create([
            'email' => $request->get('user')["email"],
            'name' => $request->get('user')["username"],
            'password' => bcrypt($request->get('user')["password"])
        ]);
        // Presentation layer added
        $user = fractal($user, new AuthenticatedUserTransformer())->toArray();
        // Mount data to response
        return response()->json($user);
    }
}
