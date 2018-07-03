<?php

namespace App\Observers; 

use App\Models\Reply;
use App\Models\Blog;
use App\Notifications\BlogReplied;

class ReplyObserver
{
	public function creating(Reply $reply)
	{
		return $reply->content = clean($reply->content, 'user_blog_body');
	}

	public function created(Reply $reply)
	{
		$blog = $reply->blog;
		$blog->increment('reply_count', 1);

		$blog->user->notify(new BlogReplied($reply));
	}

	public function deleted(Reply $reply)
	{
		if ($reply->blog->reply_count > 0) {
			$reply->blog->decrement('reply_count', 1);
		}
	}

	/*public function seved(Blog $blog)
	{
		$blog->reply_count = count($blog->replies);
	}*/
}