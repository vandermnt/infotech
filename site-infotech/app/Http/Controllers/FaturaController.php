<?php

namespace App\Http\Controllers;

use App\ContasReceber;
use App\SituacaoConta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FaturaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cod_cliente = Auth::user()->CODIGO;
        $contas_receber = ContasReceber::where('COD_CLIENTE', $cod_cliente)->orderBy('DATA_VENCIMENTO', 'desc')->get();

        foreach ($contas_receber as $conta){
            $conta->status = SituacaoConta::find($conta->COD_SITUACAO);
        }

        return view('fatura.index', compact('contas_receber'));
    }
}
