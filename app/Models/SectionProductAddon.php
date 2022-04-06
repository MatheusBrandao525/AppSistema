<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sectionProductAddon extends Model
{
    use HasFactory;

    protected $fillable = [
        'section_product_id',
        'title_text',
        'description_text',
        'price',
        'position'
    ];

    /**
     * Relações
     */

     public function sectionProduct()
     {
        $this->belongsTo(SectionProduct::class, 'section_product_id');
     }
}
