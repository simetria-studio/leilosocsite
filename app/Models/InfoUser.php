<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InfoUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'nome',
        'apelido',
        'pais',
        'codigo_pais',
        'telemovel',
        'morada',
        'codigo_postal',
        'localidade',
        'data_nascimento',
        'nif',
        'sms',
    ];
}
