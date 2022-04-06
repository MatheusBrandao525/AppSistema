<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['card_id', 'position'];

    /**
     * Relações
     */

     public function card(){
         return $this->belongsTo(Card::class, 'card_id');
     }
}
