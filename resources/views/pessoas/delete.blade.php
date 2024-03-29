@extends('template.app')

@section('content')
<div class="col-md-6 well">
    <div class="col-md-12">
        <h3>Deseja excluir esse contato?</h3>
        <div style="float: right">
            <a class="btn btn-info" href="{{url("pessoas")}}">
                <i class="fas fa-chevron-circle-left"></i>
                &nbsp;Cancelar
            </a>
            <a class="btn btn-danger" href="{{url("pessoas/$pessoa->id/destroy")}}">
                <i class="fas fa-times-circle"></i>
                &nbsp;Excluir
            </a>
        </div>
    </div>
</div>
<div class="col-md-4">
    <div class="card">
        <div class="card-header bg-danger">{{$pessoa->nome}}</div>
        <div class="card-body">
            @foreach($pessoa->telefones as $telefone)
            <p><b>Telefone:</b> ({{ $telefone->ddd }}) {{ $telefone->telefone }}</p>
            @endforeach
        </div>
    </div>
</div>
@endsection