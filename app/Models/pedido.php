<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;

    protected $fillable = ['cadastro_id','pedido','preco'];

    public function cadastro(){
        return $this->belongsTo(Cadastro::class);

    }
}
