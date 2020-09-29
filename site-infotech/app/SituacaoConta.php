<?php


namespace App;


use Illuminate\Database\Eloquent\Model;

class SituacaoConta extends Model
{
    protected $fillable = [
        'CODIGO', 'SITUACAO'
    ];

    protected $primaryKey = 'CODIGO';
    protected $table = "situacao_contas";

}
