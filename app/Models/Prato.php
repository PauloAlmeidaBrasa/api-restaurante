<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prato extends Model
{
    protected $table = 'prato';


    use HasFactory;


    protected $fillable = [
        'nome', 'descricao', 'preco','cardapio_id'
    ];
}
