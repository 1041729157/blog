@if (count($followings))
	<div class="list-group followings">
		@foreach ($followings as $following)
		<a href="{{ route('users.show', $following->id) }}">
			<img src="{{ $following->avatar }}">
			<h4>{{ $following->name }} · {{ $following->email }}</h4>
		</a>
		<hr>
		@endforeach
	</div>
@else
	<div class="empty-block">暂无数据 ~_~ </div>
@endif