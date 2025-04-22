<?php

namespace App\Mail;

use App\Models\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Support\Facades\Storage;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Contracts\Queue\ShouldQueue;

class BecomeRevisor extends Mailable
{
    use Queueable, SerializesModels;

    public $user;
    public $info;
    public $attachment;

    public function __construct(User $user, $attachment = null, $info = null)
    {
        $this->user = $user;
        $this->info = $info;
        $this->attachment = $attachment;
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: "Rendi revisore l'utente " . $this->user->name,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'mail.become-revisor',
            with: [
                'user' => $this->user,
                'info' => $this->info,
            ],
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        if ($this->attachment) {
            $fullPath = Storage::disk('public')->path($this->attachment);
            $mimeType = mime_content_type($fullPath);

            return [
                Attachment::fromStorageDisk('public', $this->attachment)
                    ->as(basename($this->attachment))
                    ->withMime($mimeType),
            ];
        }
        return [];
    }
}
