<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model
{
    protected $fillable = [
        "descricao", "logradouroEndereco", "bairroEndereco", "numeroEndereco", "cepEndereco", 
        "cidadeEndereco", "preco", "qtdQuartos", "tipo", "imovel_id"
      ];
      protected $table = "imoveis";

      public function user(){
        return $this->belongsTo('App\User', 'imovel_id');
    }
}
