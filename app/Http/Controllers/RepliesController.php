<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ReplyRequest;
use App\Models\Reply;
use App\Models\Blog;
use Auth;

class RepliesController extends Controller
{
	public function __construct()
	{
		$this->middleware('auth');
	}

	public function reply(ReplyRequest $request, Reply $reply)
	{
		$reply->content = $request->content;
		$reply->user_id = Auth::id();
		$reply->blog_id = $request->blog_id;
		$reply->save();

		return redirect()->back()->with('success', '回复发表成功！');
	}

    public function destroy(Reply $reply)
    {
    	$this->authorize('destroy', $reply);
    	$reply->delete();
    	return redirect()->back()->with('success', '回复删除成功！');
    }
}
