@extends('layouts.app', ['pageSlug' => 'Disciplina'])


@section('content')
<div class="row">
    <div class="col-12">
        <div class="card card-chart">
            <div class="card-header ">
                <div class="row">
                    <div class="col-sm-6 text-left">
                        <h2 class="card-title">Disciplina</h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="{{ route('disciplina.create')}}" class="btn btn-secondary float-right">Criar Novo</a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                @include('alerts.success')
                @include('alerts.error')
                <div class="">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th style="text-align: right">Editar</th>
                                <th style="text-align: right">Alterar Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        @forelse($data as $item)
                            <tr>
                                <td>{{$item->nome}}</td>
                                <td style="text-align: right"><a href="{{ route('disciplina.edit', [$item->id]) }}" class="btn btn-primary">Editar</a></td>
                                <td style="text-align: right">
                                    <form action="{{route('disciplina.status', $item->id)}}" id="form-{{$item->id}}" method="POST">
                                        @csrf
                                        @method('POST')
                                        <button type="submit" class="btn btn-primary">{{ $item->ativo == 1? 'Desativar':'Ativar'}}</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="3" style="text-align:center">
                                    Não Foram encontrados Registros
                                </td>
                            </tr>
                        @endforelse
                        </tbody>
                    </table>
                </div>

                <!-- <div class="chart-area">
                        <canvas id="chartBig1"></canvas>
                    </div> -->
            </div>
            <div class="card-footer py-4">
                <nav class="d-flex justify-content-end" aria-label="...">
                    {{ $data->links() }}
                </nav>
            </div>
        </div>
    </div>
</div>
@endsection