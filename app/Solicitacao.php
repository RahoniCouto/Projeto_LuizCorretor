<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Solicitacao extends Model
{
    protected $fillable = [
        "tipoVC", "bairroEnderecoVC",
        "cidadeEnderecoVC", "qtdQuartos", "valorMax", "valorMin",
        "solicitacao_id" 
      ];
      
      protected $table = "solicitacoes";

      public function user(){
          return $this->belongsTo('App\User', 'solicitacao_id');
      }
}
