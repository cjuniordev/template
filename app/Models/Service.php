<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'message_text',
    ];

    public function getWhatsappLinkAttribute(): string
    {
        $about = About::first();

        return whatsapp_link($about->number, $this->message_text);
    }
}
