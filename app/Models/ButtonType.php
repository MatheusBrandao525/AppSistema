<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ButtomType extends Model
{
    use HasFactory, softDeletes;

    protected $fillable = ['type', 'icon'];
}
