<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardSignature extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'font_id',
        'signature_align',
        'signature_text',
        'signature_link_text',
        'signature_text_font_size',
        'signature_text_color',
        'signature_link_text_color',
        'signature_background_color',
        'link_url',
        'margin_top'
    ];
    /**
    * Relações
    */

    public function card()
    {
        return $this->belongsTo(Card::class, 'card_id');
    }

    public function font()
    {
        return $this->belongsTo(Font::class, 'font_id');
    }
}
