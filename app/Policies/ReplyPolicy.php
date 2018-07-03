<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Reply;
use Illuminate\Auth\Access\HandlesAuthorization;

class ReplyPolicy extends Policy
{
    use HandlesAuthorization;

    public function destroy(User $user, Reply $reply)
    {
        return $user->id == $reply->user_id || $user->id == $reply->blog->user_id;
    }
}
