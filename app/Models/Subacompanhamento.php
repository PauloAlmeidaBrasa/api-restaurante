<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subacompanhamento extends Model
{
    use HasFactory;
    protected $table = 'subacompanhamento';

    protected $fillable = [
        'nome', 'descricao', 'preco'
    ];
}
