<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
	public function creating(User $user)
	{
		return $user->avatar = 'http://blog.test/avatar/4.jpg';
	}
}