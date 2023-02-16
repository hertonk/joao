@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
            <table class="table custom-table">
                        <thead>
                            <tr>
                                <th scope="col">Lote 1</th>
                                <th scope="col">Lote 2</th>
                                <th scope="col">Lote 3</th>
                                <th scope="col">Lote 4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>{{ count($lote1) }}</td>
                                <td>{{ count($lote2)}}</td>
                                <td>{{ count($lote3) }}</td>
                                <td>{{ count($lote4) }}</td>
                            </tr>
                        </tbody>
                </table>
            </div>
            <div class="col-md-8">
                <div class="table-responsive custom-table-responsive">
                    <table class="table custom-table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Whatsapp</th>
                                <th scope="col">Instagram</th>
                                <th scope="col">Lote</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($participants as $item)
                                <tr>
                                    <th scope="row">{{ $item->id }}</th>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->whatsapp }}</td>
                                    <td>{{ $item->instagram }}</td>
                                    <td>{{ $item->lote }}</td>
                                    <td>
                                        @if ($item->status == 1)
                                            <span class="badge bg-warning rounded-pill py-1">Aguardando Avaliação</span>
                                        @elseif($item->status == 2)
                                            <span class="badge bg-success rounded-pill py-1">Aprovado</span>
                                        @else
                                            <span class="badge bg-danger rounded-pill py-1">Não Aprovado</span>
                                        @endif
                                    </td>
                                    <td><a class="linkButton"
                                            href="{{ URL::to('/') }}/detalhe/{{ $item->id }}">Detalhes</a></td>
                                </tr>
                                <tr class="spacer">
                                    <td colspan="100"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
