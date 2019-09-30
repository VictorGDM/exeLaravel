@extends("template.app")

@section("content")
<style>
    .btn-action {
        float: right;
    }
</style>
<div class="row">
    @foreach($pessoas as $pessoa)
    <div class="col-md-3">
        <div class="card">
            <div class="card-header bg-info">
                {{$pessoa->nome}}

                <a href="{{url("/pessoas/$pessoa->id/excluir")}}" class="btn btn-xs btn-danger btn-action">
                    <i class="fas fa-trash-alt"></i>
                </a>
                <a href="{{url("/pessoas/$pessoa->id/editar")}}" class="btn btn-xs btn-dark btn-action">
                    <i class="fas fa-pen"></i>
                </a>
            </div>
            <div class="card-body">
                @foreach($pessoa->telefones as $telefone)
                <p><b>Telefone:</b> ({{ $telefone->ddd }}) {{ $telefone->telefone }}</p>
                @endforeach
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection