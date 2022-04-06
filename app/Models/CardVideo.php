<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardVideo extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'font_id',
        'video_align',
        'video_title_text',
        'video_title_text_font_size',
        'video_title_text_color',
        'video_text_text_background_color',
        'video_description_text',
        'video_description_text_font_size',
        'video_description_text_color',
        'video_description_text_background_color',
        'video_cover_image_path',
        'video_url',
        'position'
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
