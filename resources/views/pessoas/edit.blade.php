@extends('template.app')

@section('content')
<div class="col-md-12">
    <h3>Editar Usuário</h3>
</div>

<div class="col-md-5">
    <form method="POST" class="col-md-12" action="{{url('/pessoas/update')}}">
        {{ csrf_field() }}
        <input type="hidden" name="id" value="{{$pessoa->id}}">
        <div class="form-group col-md-12">
            <label for="name" class="control-label"><b>Name:</b></label>
            <input type="text" value="{{$pessoa->nome}}" name="nome" class="form-control">
        </div>

        <div class="col-md-12">
            <button style="float:right" type="submit" class="btn btn-primary">Atualizar</button>
        </div>
    </form>
</div>
@endsection