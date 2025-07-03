<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class AccountApproved extends Notification
{
    use Queueable;

    public function via($notifiable)
    {
        return ['mail'];
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->subject('Akun Anda Telah Disetujui')
            ->greeting('Halo, ' . $notifiable->name)
            ->line('Selamat! Akun Anda telah disetujui oleh admin.')
            ->action('Login Sekarang', url('/login'))
            ->line('Terima kasih telah mendaftar di Klinik kami.');
    }
}

