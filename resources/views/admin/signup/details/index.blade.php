@extends('layouts.merge.dashboard')
@section('titulo', 'Detalhes do Registo')

@section('content')
    <div class="card mb-2">
        <div class="card-body">
            <h2 class="h5 page-title">
                <a href="{{ route('admin.signup.index') }}"><u>Lista de Registos</u></a> >
                {{ $signup->name }}
            </h2>
        </div>
    </div>
    <div class="card shadow">
        <div class="card-body">
            <div class="container-fluid">

                <div class="row mx-5 justify-content-between">
                    <div class="col-12 col-md-8 col-lg-8 mt-5">
                        <h2 class="h3 page-title">
                            Nome: {{ $signup->name }}
                        </h2>
                    </div>
                    <div class="col-12 col-md-4 col-lg-4 text-right mt-5">
                        @if ($signup->status == 'APROVADO')
                            <a href='{{ route('admin.credencial.print', $signup->code) }}' class="btn btn-primary"
                                target='_blank'>Imprimir Credencial</a>
                        @endif
                        <a href='{{ route('admin.signup.edit', $signup->id) }}'
                            class="btn btn-white text-dark border-dark">Editar</a>
                    </div>
                </div>
                <div class="row m-5 align-items-center">
                   

                    <div class="col-12 col-md-6 col-lg-4 mb-2">
                        <h5 class="mb-1">
                            <b>Estado</b>
                        </h5>
                        <p class="text-dark">
                            @if ($signup->status == 'RECEBIDO')
                                <b class="bg-primary p-2 rounded text-white">
                                    {{ $signup->status }}
                                </b>
                            @elseif($signup->status == 'APROVADO')
                                <b class="bg-success p-2 rounded text-white">
                                    {{ $signup->status }}
                                </b>
                            @else
                                <b class="bg-danger p-2 rounded text-white">
                                    {{ $signup->status }}
                                </b>
                            @endif
                        </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-2">
                        <h5 class="mb-1">
                            <b>Passaporte/Bilhete de Identidade</b>
                        </h5>
                        <p class="text-dark">
                            {{ $signup->idcard }}
                        </p>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-2">
                        <h5 class="mb-1">
                            <b>País</b>
                        </h5>
                        <p class="text-dark">
                            {{ $signup->country }}
                        </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-2">
                        <h5 class="mb-1">
                            <b>Código</b>
                        </h5>
                        <p class="text-dark">
                            {{ $signup->code }}
                        </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-2">
                        <h5 class="mb-1">
                            <b>Email</b>
                        </h5>
                        <p class="text-dark">
                            {{ $signup->email }}
                        </p>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4 mb-2">
                        <h5 class="mb-1">
                            <b>Data de Chegada</b>
                        </h5>
                        <p class="text-dark text-justify">
                            {{ $signup->startDate }}
                        </p>
                    </div>
                    <div class="col-12 col-md-6 col-lg-4 mb-2">
                        <h5 class="mb-1">
                            <b>Data de Partida</b>
                        </h5>
                        <p class="text-dark text-justify">
                            {{ $signup->endDate }}
                        </p>
                    </div>

                    <div class="col-12 mb-4">
                        <h5 class="mb-1">
                            <b>Fotografia de Identificação</b>
                        </h5>

                        <div class="col-12 col-md-6 col-lg-4">

                            <img src="/storage/{{ $signup->photo }}" width="100%">
                        </div>
                    </div>

                    <div class="col-md-12 mb-2">
                        <hr>
                        <p class="mb-1 text-dark"><b>Data de Cadastro</b> {{ $signup->created_at }}
                        </p>
                        <p class="mb-1 text-dark"><b>Última Actualização</b> {{ $signup->updated_at }}
                        </p>

                    </div>
                </div>
            </div> <!-- .container-fluid -->
        </div>
    </div>


@endsection
