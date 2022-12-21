@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detalhes</div>

                <div class="card-body">

                    <table class="table">
                        <tbody>
                            <tr>
                                <th scope="row">Name</th>
                                <td>{{ $participant->name }}</td>
                            </tr>
                            <tr>
                                <th scope="row">CPF</th>
                                <td>{{ $participant->cpf }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Data de Nascimento</th>
                                <td>{{ date('d/m/Y', strtotime($participant->birthday)) }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Whatsapp</th>
                                <td>{{ $participant->whatsapp }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Emergency</th>
                                <td>{{ $participant->emergency }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Endereço</th>
                                <td>{{ $participant->address }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Instagram</th>
                                <td>{{ $participant->instagram }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Matrícula</th>
                                <td><a href="{{ URL::to('/') }}/tmp/uploads/{{ $participant->registration }}" target="_blank">{{ $participant->registration }}</a></td>
                            </tr>
                            <tr>
                                <th scope="row">Foto</th>
                                <td><a href="{{ URL::to('/') }}/tmp/uploads/{{ $participant->photo }}" target="_blank">{{ $participant->photo }}</a></td>
                            </tr>
                            <tr>
                                <th scope="row">Atlética</th>
                                <td>{{ strtoupper($participant->athletic_id) }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Tipo de Inscrição</th>
                                <td>
                                    @if($participant->type == 1)
                                        Acadêmico
                                    @elseif($participant->type == 2)
                                        Convidado
                                    @elseif($participant->type == 3)
                                        Treinador
                                    @elseif($participant->type == 4)
                                        Egresso
                                    @elseif($participant->type == 5)
                                        Diretor
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Precisa de Alojamento</th>
                                <td>
                                    @if($participant->accommodation == 's')
                                        Sim
                                    @elseif($participant->type == 'n')
                                        Não
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    Status
                                </td>
                                <td>
                                    @if($participant->status == 1)
                                   
                                        <span class="text-primary">Aguardando Avaliação</span>
                                    
                                    @elseif($participant->status == 2)
                                        
                                        <span class="text-success">Aprovado</span>
                                    
                                    @else 

                                        <span class="text-danger">Não Aprovado</span<=>

                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">Data de Inscrição</th>
                                <td>{{ date('d/m/Y H:m:s', strtotime($participant->created_at)) }}</td>
                            </tr>
                            <tr>
                                <th scope="row">Lote</th>
                                <td>{{ $participant->lote }}</td>
                            </tr>
                            <tr>
                                <td>
                                    @if($participant->status == 1)

                                        <a href="{{ URL::to('/') }}/aprovar/{{ $participant->id }}" class="btn btn-success">Aprovar</a>
                                        <a href="{{ URL::to('/') }}/naoaprovar/{{ $participant->id }}" class="btn btn-danger">Não Aprovar</a>
                                  
                                  @elseif($participant->status == 3)
                                        
                                        <a href="{{ URL::to('/') }}/aprovar/{{ $participant->id }}" class="btn btn-success">Aprovar</a>

                                  @endif
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
