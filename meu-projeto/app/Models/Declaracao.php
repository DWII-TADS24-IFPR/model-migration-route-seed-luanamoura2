<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Declaracao extends Model
{
    protected $table='declaracao';
    protected $fillable = ['hash', 'data', 'email'];
}
