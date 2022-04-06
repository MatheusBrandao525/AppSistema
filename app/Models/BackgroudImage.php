<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BackgroudImage extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['image_path', 'is_template'];
}
