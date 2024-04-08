<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AcompanhamentoSubacompanhamento extends Model
{
    protected $table = 'acompanhamento_subacompanhamento';
    use HasFactory;

    protected $fillable = [
        'acompanhamento_id','subacompanhamento_id'
    ];
}
