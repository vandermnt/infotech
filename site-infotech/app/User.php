<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'CODIGO', 'NOME', 'EMAIL', 'SENHA',
    ];

    protected $hidden = [
        'SENHA', 'remember_token',
    ];

    protected $primaryKey = 'CODIGO';
    protected $table = "clientes";

}
