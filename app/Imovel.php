<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
        "nomeEmp", "descricao", "logradouroEndereco", "bairroEndereco", "numeroEndereco", "cepEndereco", 
        "cidadeEndereco", "preco", "qtdQuartos", "tipo"
      ];
      protected $table = "imoveis";
}
