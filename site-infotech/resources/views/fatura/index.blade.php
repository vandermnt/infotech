@extends('layouts.app')

@section('fatura_js'){{asset('js/fatura.js')}}@endsection
@section('fatura'){{asset('css/faturas.css')}}@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="faturas page col-md-12 animated slideInUp">
                <div class="card">
                    <div data-background-color="degrade" class="card-header">
                        <div class="icone">
                            <i class="fas fa-file-invoice-dollar mr-3"></i>
                            <div class="desc">
                                <h3 class="title">
                                    <p>Faturas</p>
                                </h3>
                                <p class="category">Gerencie suas faturas.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-content">
                        <table id="table" class="table" style="width: 100%">
                            <thead>
                                <th class="text-center">Ações</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Vencimento</th>
                                <th class="text-center">Valor</th>
                                <th class="text-center">Descrição</th>
                            </thead>
                            <tbody>
                                @foreach($contas_receber as $item)
                                    <tr class="text-gray cursor-pointer tabela-zebrada">
                                        <td>
                                            @if(($item->COD_SITUACAO == 1 || $item->COD_SITUACAO == 2) && $item->ENDERECO_BOLETO != "")
                                                <a href="{{$item->ENDERECO_BOLETO}}" id="icone" title="Boleto" target="_blank"><i class="fas fa-file-invoice"></i></a>
                                            @endif
                                        </td>
                                        <td id="status"
                                                @if($item->COD_SITUACAO == 3) style="color:green" @endif
                                                @if($item->COD_SITUACAO == 1) style="color:#4394e8" @endif
                                                @if($item->COD_SITUACAO == 2) style="color:red" @endif
                                        >
                                            {{$item->status->SITUACAO}}
                                        </td>
                                        <td>{{ date_format(date_create($item->DATA_VENCIMENTO),"d/m/Y")}}</td>
                                        <td>R$ {{number_format($item->VALOR, 2, ',', '.')}}</td>
                                        <td>{{strtoupper($item->DESCRICAO)}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


