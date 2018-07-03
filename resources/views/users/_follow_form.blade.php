@if ($user->id !== Auth::id())
<hr>
<div id="follow_form">
	@if (Auth::user()->isFollowing($user->id))
	<form action="{{ route('users.destroy_follower', $user->id) }}" method="post">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button type="submit" class="btn btn-sm">取消关注</button>
	@else 
	<form action="{{ route('users.store_follower', $user->id) }}" method="post">
		{{ csrf_field() }}
		<button type="submit" class="btn btn-sm">关注</button>
	@endif
	</form>
</div>
@endif