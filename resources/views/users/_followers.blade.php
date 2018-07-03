@if (count($followers))
	<div class="list-group followers">
		@foreach ($followers as $follower)
		<a href="{{ route('users.show', $follower->id) }}">
			<img src="{{ $follower->avatar }}">
			<h4>{{ $follower->name }} · {{ $follower->email }}</h4>
		</a>
		<hr>
		@endforeach
	</div>
@else
	<div class="empty-block">暂无数据 ~_~ </div>
@endif