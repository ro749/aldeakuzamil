<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use Ro749\FullListingTemplate\Models\Unit;
use Illuminate\Support\Facades\Log;
class CotizationMail extends Mailable
{
    use Queueable, SerializesModels;
    public string $unit;
    public string $link;
    /**
     * Create a new message instance.
     */
    public function __construct(string $unit, string $link)
    {
        $this->unit = $unit;
        $this->link = $link;
    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Cotization Mail',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        $unit = Unit::instance()->where('id', $this->unit)->first();
        return new Content(
            view: 'listing-utils::Sender.cotization-mail',
            with: [
                'logo' => 'https://aldeakuzamil.propstudios.mx/imagenes/logo.png',
                'unit_name' => $unit->unit,
                'url' => $this->link,
                'unit_tag' => 'Lote',
                'buttom_tag' => 'Ver Detalles',
                'title' => 'Verdant',
                'image'=>'https://propstudios.mx/img/Verdant/Unidades/'.$unit->unit.'.jpg',
            ]
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
