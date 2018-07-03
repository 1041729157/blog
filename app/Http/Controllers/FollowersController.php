<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class FollowersController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

    public function store_follower(User $user)
    {
        $users = Auth::user();

        if ($users->id == $user->id) {
            return redirect('/');
        }

        if (!$users->isFollowing($user->id)) {
            $users->follow($user->id);
        }

        return redirect()->back();
    }

    public function destroy_follower(User $user)
    {
        $users = Auth::user();

        if ($users->id == $user->id) {
            return redirect('/');
        }

        if ($users->isFollowing($user->id)) {
            $users->unfollow($user->id);
        }

        return redirect()->back();
    }
}
