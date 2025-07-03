<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AccountRejected extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Akun Anda Ditolak')
            ->greeting('Halo, ' . $notifiable->name)
            ->line('Kami mohon maaf, akun Anda tidak dapat kami setujui.')
            ->line('Silakan hubungi admin untuk informasi lebih lanjut.')
            ->line('Terima kasih telah mencoba mendaftar.');
    }
}
