<?php  

namespace App\Observers;

use App\Models\Blog;
use App\Jobs\TranslateSlug;

class BlogObserver
{
	public function saving(Blog $blog)
	{
		$blog->body = clean($blog->body, 'user_blog_body');

		$blog->excerpt = make_excerpt($blog->title);

	}

	// 存入数据库后分发任务，确保 $bolg->id 永远有值
	public function saved(Blog $blog)
	{
		// 如 slug 字段无内容，即使用翻译器对 title 进行翻译
		if (!$blog->slug) {
			// 推送任务到队列
			dispatch(new TranslateSlug($blog));
		}
	}

	public function deleted(Blog $blog)
	{
		\DB::table('replies')->where('blog_id', $blog->id)->delete();
	}
}