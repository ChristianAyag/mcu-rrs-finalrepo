<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use App\Models\User;

class NewRegisteredUser extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */

    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        \Log::info('via() fired for user', ['id' => $notifiable->user_ID]);
        return ['database'];
    }

    /**
     * Get the mail representation of the notification.
     */

    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            'id'      => $this->user->user_ID,
            'name'    => $this->user->user_Fname . ' ' . $this->user->user_Lname,
            'email'   => $this->user->user_Email,
            'access'  => $this->user->user_Access,
            'message' => 'A new user has registered and needs classification.',
        ];
    }
}
