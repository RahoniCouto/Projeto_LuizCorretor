<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $fillable = [
        "solicitacao", "tipoVC", "bairroEnderecoVC",
        "cidadeEnderecoVC", "qtdQuartos", "valorMax", "valorMin"
      ];
      
      protected $table = "solicitacoes";
}
