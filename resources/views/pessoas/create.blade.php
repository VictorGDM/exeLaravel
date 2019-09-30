@extends("template.app")

@section("content")
<div class="col-md-12">
    <h3>Cadastrar Usuário</h3>
</div>

<div class="col-md-5">
    <form method="POST" class="col-md-12" action="{{url('/pessoas/store')}}">
        {{ csrf_field() }}
        <div class="form-group col-md-12">
            <label for="name" class="control-label"><b>Name:</b></label>
            <input type="text" name="nome" class="form-control">
        </div>

        <div class="form-group col-md-4">
            <label for="ddd" class="control-label"><b>DDD:</b></label>
            <input type="text" name="ddd" class="form-control">
        </div>

        <div class="form-group col-md-8">
            <label for="telefone" class="control-label"><b>Telefone:</b></label>
            <input type="text" name="telefone" class="form-control">
        </div>

        <div class="col-md-12">
            <button style="float:right" type="submit" class="btn btn-primary">Cadastrar</button>
        </div>
    </form>
</div>
@endsection