@extends('layouts.app')

@section('fatura_css'){{asset('css/faturas.css')}}@endsection

@section('content')

    <?php
        print_r($contas_receber);
    ?>

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
                        <table class="table table-responsive table-hover">
                            <thead>
                                <th class="text-center">Status</th>
                                <th class="text-center">Vencimento</th>
                                <th class="text-center">Valor</th>
                                <th class="text-center">Ações</th>
                            </thead>
                            <tbody>
                                @foreach($contas_receber as $item)
                                    <tr class="text-gray cursor-pointer tabela-zebrada">
                                        <td>{{$item->COD_SITUACAO}}</td>
                                        <td>{{$item->DATA_VENCIMENTO}}</td>
                                        <td>{{$item->VALOR}}</td>
                                        <td></td>
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
