<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    protected $table='Curso';
    protected $fillable = ['nome', 'sigla', 'total_horas'];
}
