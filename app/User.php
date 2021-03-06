<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'nomeCliente', 'sobrenomeCliente', 'email', 'cpfCliente', 'rgCliente',
        'telCliente', 'celCliente', 'email', 'password','logradouroEndereco', 'bairroEndereco',
        'numeroEndereco', 'cepEndereco', 'cidadeEndereco',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function solicitacoes(){
        return $this->hasMany('App\solicitacao', 'solicitacao_id');
    }

    public function imoveis(){
        return $this->hasMany('App\Imovel', 'imovel_id');
    }
}

