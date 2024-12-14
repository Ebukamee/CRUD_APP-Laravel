<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medication extends Model
{
    protected $fillable = ['name', 'type', 'active', 'indication', 'manufacturer','side','image'];
    /** @use HasFactory<\Database\Factories\MedicationFactory> */
    use HasFactory;
}
