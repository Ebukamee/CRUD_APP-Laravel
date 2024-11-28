<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signage extends Model
{
    protected $fillable = ['name', 'shape', 'size', 'imagePath'];
    /** @use HasFactory<\Database\Factories\SignageFactory> */
    use HasFactory;
}
