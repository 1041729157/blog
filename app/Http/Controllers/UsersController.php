<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\UserRequest;
use App\Http\Requests\UserPasswordRequest;
use App\Handlers\ImageUploadHandler;
use App\Models\Contact;
use Auth;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['show']]);
    }

    public function show(User $user)
    {
        $contact = new Contact();
        $contacts = $contact->orderBy('created_at', 'asc')->paginate(10);
    	return view('users.show', compact('user', 'contacts'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user);
    	return view('users.edit', compact('user'));
    }

    public function update(UserRequest $request, User $user, ImageUploadHandler $uploader)
    {
        $this->authorize('update', $user);
    	$data = $request->all();

        if ($request->avatar) {
            $result = $uploader->save($request->avatar, 'avatars', $user->id, 362);
            if ($result) {
                $data['avatar'] = $result['path'];
            }
        }

        $user->update($data);
    	return redirect()->route('users.show', $user->id)->with('success', '个人资料更新成功！');
    }


    public function edit_password(User $user)
    {
        return view('users.password', compact('user'));
    }

    public function update_password(UserPasswordRequest $request, User $user)
    {
        $this->authorize('update', $user);
        $data = $request->all();
        $user->update($data);

        return redirect()->route('users.show', $user->id)->with('success', '密码修改成功');
    }

    /*// 关注人页
    public function followings(User $user)
    {
        $followings = $user->followings()->paginate(20);
        return view('users.show', compact('followings'));
    }

    // 粉丝页
    public function followers(User $user)
    {
        $followers = $user->followers()->paginate(20);
        return view('users.show', compact('followers'));
    }*/
}
