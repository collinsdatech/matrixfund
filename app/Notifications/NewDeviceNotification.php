<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class NewDeviceNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
   protected $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('New Device Login Detected')
            ->line('A new device has logged into your ' . setting('siteName') . '  account.')
            ->line('**Details**:')
            ->line('IP Address: ' . $this->data['ip_address'])
            ->line('User Agent: ' . $this->data['user_agent'])
            ->line('If this was not you, please secure your account immediately.');
    }
    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}
