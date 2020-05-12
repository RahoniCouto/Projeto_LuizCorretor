<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $fillable = [
        "solicitacao", "tipoVC", "logradouroEnderecoVC", "numeroEnderecoVC", "bairroEnderecoVC",
        "cidadeEnderecoVC", "qtdQuartos", "valorVC"
      ];
      
      protected $table = "solicitacoes";
}
