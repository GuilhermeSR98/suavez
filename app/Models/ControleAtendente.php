<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControleAtendente extends Model
{
    use HasFactory;
    protected $fillable = ['indice_atual', 'indice_proximo'];
}
