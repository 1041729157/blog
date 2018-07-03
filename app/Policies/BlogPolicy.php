<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Blog;

class BlogPolicy extends Policy
{
    public function update(User $user, Blog $blog)
    {
        return $user->id == $blog->user_id;
    }

    public function destroy(User $user, Blog $blog)
    {
        return $user->id == $blog->user_id;
    }
}
