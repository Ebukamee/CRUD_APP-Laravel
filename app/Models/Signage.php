<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Signage extends Model
{
    protected $fillable = ['name', 'shape', 'size', 'imagePath', 'dojo_id'];
    /** @use HasFactory<\Database\Factories\SignageFactory> */
    use HasFactory;

    public function dojo() {
        return $this->belongsTo(Dojo::class);
    }
}
