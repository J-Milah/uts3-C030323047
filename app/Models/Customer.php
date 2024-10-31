<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // Tentukan kolom-kolom yang dapat diisi (mass assignable)
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];
}
