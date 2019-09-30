<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\View;

class Pessoa extends Model
{
    protected $fillable = [
        'id',
        'nome'
    ];

    protected $table = 'pessoas';

    public function telefones()
    {
        return $this->hasMany(Telefone::class, 'pessoa_id');
    }
}
