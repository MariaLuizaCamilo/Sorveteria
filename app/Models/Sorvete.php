<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sorvete extends Model
{
    use HasFactory;

    // Indica o nome da tabela do banco de dados
    protected $table = "sorvetes";

    // Indica os campos que podem ser preenchidos pelo usuário
    protected $fillable = [
        'nome',
        'sabor',
        'valor',


    ];
}
