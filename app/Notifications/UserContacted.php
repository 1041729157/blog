<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use App\Models\Contact;

class UserContacted extends Notification
{
    use Queueable;

    public $contact;

    public function __construct(Contact $contact)
    {
        $this->contact = $contact;
    }

    public function via($notifiable)
    {
        return ['database'];
    }

    public function toDatabase($notifiable)
    {
        $link = $this->contact->link($notification->contact_id);

        return [
            'contact_id' => $this->contact->id,
            'contact_content' => $this->contact->content,
            'contact_name' => $this->contact->name,
            'contact_email' => $this->contact->email,
            'contact_excerpt' => $this->contact->excerpt,
            'contact_link' => $link,
            /*'contact_user_id' => ($this->contact->user->id) ? $this->contact->user->id : null,*/
        ];
    }
}
