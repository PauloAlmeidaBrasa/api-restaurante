<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Acompanhamento extends Model
{

    protected $table = 'acompanhamento';

    use HasFactory;

    protected $fillable = [
        'nome', 'preco'
    ];
}
