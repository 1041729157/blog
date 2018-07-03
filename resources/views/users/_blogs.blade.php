@if (count($blogs))
<div class="list-group">
	@foreach ($blogs as $blog)
	<li class="list-group-item">
		<a href="{{ route('blogs.show', $blog->id) }}">
			{{ $blog->title }}
		</a>
		<span class="meta pull-right">
			{{ $blog->reply_count }}
			<span> ⋅ </span>
			{{ $blog->created_at->diffForhumans() }}
		</span>
	</li>
	@endforeach
</div>
@else 
<div class="empty-block">暂无数据</div>
@endif

{!! $blogs->render() !!}
