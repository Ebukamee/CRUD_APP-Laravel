<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class hospital extends Model
{
    protected $fillable = ['name', 'type', 'state', 'city', 'address','proprietor','director','description','image'];
    /** @use HasFactory<\Database\Factories\HospitalFactory> */
    use HasFactory;
}
