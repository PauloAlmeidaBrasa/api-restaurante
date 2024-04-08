<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PratoAcompanhamento extends Model
{
    use HasFactory;

    protected $fillable = [
        'prato_id','acompanhamento_id'
    ];
}
