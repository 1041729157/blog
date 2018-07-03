<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BlogRequest;
use App\Handlers\ImageUploadHandler;
use App\Models\Blog;
use App\Models\Reply;
use Auth;

class BlogsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['blog', 'show']]);
    }

    public function blog(BlogRequest $request, Blog $blog)
    {
    	$blogs = $blog->withOrder($request->order)->paginate(8);
    	return view('pages.blog', compact('blogs'));
    }

    public function show(Blog $blog)
    {
        $replies = $blog->replies()->with('user', 'blog')->orderBy('created_at', 'asc')->paginate(10);
    	return view('blogs.show', compact('blog', 'replies'));
    }

    public function create(Blog $blog)
    {
    	/*$blogs = $blog->all()*/
    	return view('blogs.create', compact('blog'));
    }

    public function store(BlogRequest $request, Blog $blog, ImageUploadHandler $uploader)
    {
    	$blog->fill($request->all());
    	$blog->user_id = Auth::id();

        if ($request->images) {
            $result = $uploader->save($request->images, 'images', $blog->id);
            if ($result) {
                $blog['images'] = $result['path'];
            }
        }

        $blog->save();

    	return redirect()->route('blogs.show', $blog->id)->with('success', '话题创建成功！');
    }

    public function edit(Blog $blog)
    {
        $this->authorize('update', $blog);
        return view('blogs.create', compact('blog'));
    }

    public function update(BlogRequest $request, Blog $blog, ImageUploadHandler $uploader)
    {
        $this->authorize('update', $blog);
    	$data = $request->all();

        if ($request->images) {
            $result = $uploader->save($request->images, 'images', $blog->id);
            if ($result) {
                $data['images'] = $result['path'];
            }
        }

        $blog->update($data);

    	return redirect()->route('blogs.show', $blog->id)->with('success', '话题修改成功！');
    }

    public function destroy(Blog $blog)
    {
        $this->authorize('destroy', $blog);
        $blog->delete();
        return redirect()->route('blog')->with('success', '话题删除成功！');
    }

    public function uploadImage(Request $request, ImageUploadHandler $uploader)
    {
        // 初始化返回数据，默认是失败的
        $data = [
            'success' => false,
            'msg' => '上传失败',
            'file_path' => '',
        ];

        if ($file = $request->upload_file) {
            $result = $uploader->save($request->upload_file, 'blogs', \Auth::id(), 1024);

            if ($result) {
                $data['file_path'] = $result['path'];
                $data['msg'] = '上传成功';
                $data['success'] = true;
            }
        }
        return $data;
    }
}
