<?php

namespace App\Notifications;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class FollowNotifications extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct(User $user)
    {
        $this->user = $user;
        $this->follower = Auth::user();
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database', 'broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('The introduction to the notification.')
                    ->action('Notification Action', url('/'))
                    ->line('Thank you for using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'follower'  =>  [
                'id'            =>  $this->follower->id,
                'name'          =>  $this->follower->name,
                'username'      =>  $this->follower->username,
                'avatar'        =>  $this->follower->getProfilePhotoUrlAttribute(),
                'is'            => [
                    'following'     =>  Auth::user() ? Auth::user()->isFollowing($this->user) : null,
                    'self'          =>  Auth::user() ? Auth::user()->is($this->user) : null
                ]
            ],
            'user' => [
                'id'            =>  $this->user->id,
                'name'          =>  $this->user->name,
                'username'      =>  $this->user->username,
                'avatar'        =>  $this->user->getProfilePhotoUrlAttribute(),
            ],
            'type'              =>  'follow',
        ];
    }
}
