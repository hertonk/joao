@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card  card-dark">
                    <div class="card-header">Detalhes</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-view">
                                    <div class="profile-img-wrap">
                                        <div class="profile-img">
                                            <a target="_blank"
                                                href="{{ URL::to('/') }}/tmp/uploads/{{ $participant->photo }}"><img
                                                    alt=""
                                                    src="{{ URL::to('/') }}/tmp/uploads/{{ $participant->photo }}"></a>
                                        </div>
                                    </div>
                                    <div class="profile-basic">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="profile-info-left">
                                                    <h3 class="user-name m-t-0 mb-0">{{ $participant->name }}</h3>
                                                    <h6 class="text-muted">

                                                        @if ($participant->type == 1)
                                                            Tipo de Inscrição: Acadêmico
                                                        @elseif($participant->type == 2)
                                                            Tipo de Inscrição: Convidado
                                                        @elseif($participant->type == 3)
                                                            Tipo de Inscrição: Treinador
                                                        @elseif($participant->type == 4)
                                                            Tipo de Inscrição: Egresso
                                                        @elseif($participant->type == 5)
                                                            Tipo de Inscrição: Diretor
                                                        @endif
                                                    </h6>
                                                    <small class="text-muted">
                                                        @if ($participant->status == 1)
                                                            <span class="badge bg-warning rounded-pill py-1">Aguardando
                                                                Avaliação</span>
                                                        @elseif($participant->status == 2)
                                                            <span class="badge bg-success rounded-pill py-1">Aprovado</span>
                                                        @else
                                                            <span class="badge bg-danger rounded-pill py-1">Não
                                                                Aprovado</span>
                                                        @endif
                                                    </small>
                                                    {{-- <div class="staff-id">Lote : {{ $participant->lote }}</div> --}}
                                                    <div class="small doj text-muted my-2">Data de inscrição :
                                                        {{ date('d/m/Y H:m:s', strtotime($participant->created_at)) }}</div>
                                                    <div class="d-flex gap-2 justify-content-center mt-2">
                                                        @if ($participant->status == 1)
                                                            <div class="staff-msg"><a
                                                                    href="{{ URL::to('/') }}/aprovar/{{ $participant->id }}"
                                                                    class="btn btn-success">Aprovar</a></div>
                                                            <div class="staff-msg"><a
                                                                    href="{{ URL::to('/') }}/naoaprovar/{{ $participant->id }}"
                                                                    class="btn btn-danger">Não Aprovar</a></div>
                                                        @elseif($participant->status == 3)
                                                            <div class="staff-msg"><a
                                                                    href="{{ URL::to('/') }}/aprovar/{{ $participant->id }}"
                                                                    class="btn btn-success">Aprovar</a></div>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <ul class="personal-info">

                                                    <li>
                                                        <div class="title">CPF:</div>
                                                        <div class="text"> {{ $participant->cpf }}</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Documento de comprovação:</div>
                                                        <div class="text"><a
                                                            href="{{ URL::to('/') }}/tmp/uploads/{{ $participant->document }}"
                                                            target="_blank">{{ $participant->document }}</a></div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Telefone:</div>
                                                        <div class="text">{{ $participant->emergency }}</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Data de Nascimento:</div>
                                                        <div class="text">
                                                            {{ date('d/m/Y', strtotime($participant->birthday)) }}</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Endereço:</div>
                                                        <div class="text">{{ $participant->address }}</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Whatsapp:</div>
                                                        <div class="text"><a target="_blank" class="text-decoration-none"
                                                                href="https://wa.me/{{ preg_replace('/[^0-9]/', '', $participant->whatsapp) }}">{{ $participant->whatsapp }}</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Instagram:</div>
                                                        <div class="text"><a target="_blank"
                                                                href="https://www.instagram.com/{{ $participant->instagram }}">{{ $participant->instagram }}</a>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Matrícula:</div>
                                                        <div class="text"><a
                                                                href="{{ URL::to('/') }}/tmp/uploads/{{ $participant->registration }}"
                                                                target="_blank">{{ $participant->registration }}</a></div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Atlética:</div>
                                                        <div class="text">{{ strtoupper($participant->athletic_id) }}
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Lote:</div>
                                                        <div class="text">{{ $participant->lote }}</div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Precisa de Alojamento:</div>
                                                        <div class="text">
                                                            @if ($participant->accommodation == 's')
                                                                Sim
                                                            @elseif($participant->accommodation == 'n')
                                                                Não
                                                            @endif
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Nome de Crachá:</div>
                                                        <div class="text">
                                                            @if ($participant->cracha == 's')
                                                                Sim
                                                            @elseif($participant->cracha == 'n')
                                                                Não
                                                            @endif
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="title">Nome no Crachá:</div>
                                                        <div class="text">
                                                            {{ $participant->namecracha }}
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="pro-edit"><a data-target="#profile_info" data-toggle="modal"
                                            class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
