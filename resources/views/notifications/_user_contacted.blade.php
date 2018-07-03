<div class="media">

	<div class="infos">
		<div class="media-heading">
			@if ($notification->contact_user_id)
			<a href="{{ route('users.show', $notification->data['contact_user_id']) }}">
			@else
			<a href="#">
			@endif
				{{ $notification->data['contact_name'] }}
			</a>
			给你留言：
			<a href="{{ route('contacts.index', [$notification->data['contact_id']]) }}">{{ $notification->data['contact_excerpt'] }}</a>

			<span class="meta pull-right" title="{{ $notification->created_at }}">
				<span class="glyphicon glyphicon-clock" aria-hidden="true"></span>
				{{ $notification->created_at->diffForHumans() }}
			</span>
		</div>
	</div>
</div>
<hr>