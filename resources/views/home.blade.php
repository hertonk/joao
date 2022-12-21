@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Lista de Cadastros - {{ strtoupper(Auth::user()->athletic_id) }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Nome</th>
                                <th scope="col">Whatsapp</th>
                                <th scope="col">Instagram</th>
                                <th scope="col">Lote</th>
                                <th scope="col">Status</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($participants as $item)
                            <tr>
                                <th scope="row">{{ $item->id }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->whatsapp }}</td>
                                <td>{{ $item->instagram }}</td>
                                <td>{{ $item->lote }}</td>
                                <td>
                                    @if($item->status == 1)
                                   
                                        <span class="text-primary">Aguardando Avaliação</span>
                                    
                                    @elseif($item->status == 2)
                                        
                                        <span class="text-success">Aprovado</span>
                                    
                                    @else 

                                        <span class="text-danger">Não Aprovado</span<=>

                                    @endif
                                </td>
                                <td><a href="{{ URL::to('/') }}/detalhe/{{ $item->id }}">Detalhes</a></td>
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
