<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastro extends Model
{
    use HasFactory;

    protected $fillable = ['nome','cpf','cep'];

    public function pedidos(){
        return $this->hasMany(Pedido::class);
        //Chave Estrangeira
        //A chave Estrangeira da tabela (modelo) associada
        //deve ser o nome desse modelo (snake_case) com
        //o sufixo _id
        //pedido
    }
}