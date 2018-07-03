@if (count($replies))

<ul class="list-group">
    @foreach ($replies as $reply)
        <li class="list-group-item">
            <a href="{{ route('blogs.show', $reply->blog->id) }}">
                回复话题：{{ $reply->blog->title }}
            </a>

            <div class="reply-content" style="margin: 6px 0;">
                回复内容：{!! $reply->content !!}
            </div>

            <div class="meta">
                <span class="glyphicon glyphicon-time" aria-hidden="true"></span> {{ $reply->created_at->diffForHumans() }}
            </div>
        </li>
    @endforeach
</ul>

@else
   <div class="empty-block">暂无数据 ~_~ </div>
@endif

{{-- 分页 --}}
{!! $replies->appends(Request::except('page'))->render() !!}