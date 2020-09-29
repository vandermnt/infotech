<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class ContasReceber extends Model
{
    protected $fillable = [
        'CODIGO', 'VALOR', 'COD_SITUACAO', 'DESCRICAO', 'ENDERECO_BOLETO'
    ];

    protected $primaryKey = 'CODIGO';
    protected $table = "contas_receber";

    public $status;
}
