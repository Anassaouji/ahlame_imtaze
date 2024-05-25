<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

// app/Notifications/TacheNotification.php
class TacheNotification extends Notification
{
    private $tache;

    public function __construct(Tache $tache)
    {
        $this->tache = $tache;
    }

    public function via($notifiable)
    {
        return ['mail', 'database'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('A new task has been assigned to you.')
                    ->action('View Task', url('/taches/' . $this->tache->id))
                    ->line('Thank you for using our application!');
    }

    public function toArray($notifiable)
    {
        return [
            'tache_id' => $this->tache->id,
            'title' => $this->tache->title,
        ];
    }
}
