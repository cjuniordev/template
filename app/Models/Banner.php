<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'button_text',
        'message',
    ];

    public function getWhatsappLinkAttribute(): string
    {
        $about = About::first();

        return whatsapp_link($about->number, $this->message);
    }
}
