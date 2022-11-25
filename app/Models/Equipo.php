<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    
    use HasFactory;
    protected $table = 'equipo'; // Necesario para el concepto singular y plural del eloquent
}
