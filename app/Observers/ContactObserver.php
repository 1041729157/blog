<?php  

namespace App\Observers;

use App\Models\Contact;
use App\Models\User;
use App\Jobs\TranslateSlug;
use App\Notifications\UserContacted;

class ContactObserver
{
	public function saving(Contact $contact)
	{
		$contact->content = clean($contact->content, 'user_blog_body');

		$contact->excerpt = make_excerpt($contact->content);

	}

	public function created(Contact $contact)
	{
		$user = User::find(1);
		$user->notify(new UserContacted($contact));
	}
}