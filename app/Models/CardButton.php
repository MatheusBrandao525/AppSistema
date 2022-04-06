<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CardButton extends Model
{
    use HasFactory;

    protected $fillable = [
        'card_id',
        'button_type_id',
        'button-size',
        'position',
        'button_text',
        'button_value',
        'button_icon_color',
        'button_image_path'
    ];


    /**
     * Relações
     */

     public function card(){

         return $this->belongsTo(Card::class, 'card_id');
     }

     public function buttonType(){

        return $this->belongsTo(ButtonType::class, 'button_type_id');
    }
}
