<!DOCTYPE html>
<html>

<head>
	<title>ListarPessoas</title>
</head>

<body>
	@foreach($pessoas as $pessoa)
	Nome: 
	{{$pessoa->nome}} <br>

	@foreach($pessoa->telefone as $telefone)
	Telefone: 
	{{$telefone->telefone}} <br>
	
	@endforeach

	<br><br>
	@endforeach

	<button><a href="/">Voltar</a></button>
</body>

</html>