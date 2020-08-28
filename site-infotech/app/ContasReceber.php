<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class ContasReceber extends Model
{
    protected $fillable = [
        'CODIGO', 'VALOR', 'COD_SITUACAO',
    ];

    protected $primaryKey = 'CODIGO';
    protected $table = "contas_receber";
}
