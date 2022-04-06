<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionProduct extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = [
        'section_id',
        'position',
        'title_text',
        'title_text_font_size',
        'title_text_align',
        'title_text_color',
        'title_text_background_color',
        'image_path',
        'image_align',
        'image_width',
        'price',
        'price_text_font_size',
        'sale_link',
        'description_text',
        'description_text_font_size',
        'description_text_align',
        'button_background_color',
        'button_text',
        'button_image_path',
        'addons_limit'
    ];

    /**
     * Relaçoes
    */

    public function section()
    {
        return $this->belongsTo(Section::class, 'section_id');
    }
}
