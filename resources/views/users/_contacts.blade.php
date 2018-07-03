@if (count($contacts))
<ul class="list-group">
	@foreach ($contacts as $contact)
	<li class="list-group-item">
		@if ($contact->user_id)
		<a href="{{ route('users.show', $contact->user_id) }}">
		@else 
		<a href="#">
		！
		@endif
			{{ $contact->name }} · 
		</a>
		<a href="#">
			{{ $contact->email }}
		</a>
			 · {{ $contact->created_at->diffForhumans() }}
		<div class="contact-content" style="margin: 6px 0;">
			<span style="color: #A4A4A4">给我留言：</span>
			<a href="{{ route('contacts.index', $contact->id) }}">
				{{ $contact->excerpt }}
			</a>
		</div>
	</li>
	@endforeach
</ul>
@else
   <div class="empty-block">暂无留言 ~_~ </div>
@endif

{!! $contacts->appends(Request::except('page'))->render() !!}