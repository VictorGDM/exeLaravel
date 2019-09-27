<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <form action="{{url('pessoas/addP')}}">
        <label for="nome">Nome: </label>
        <input id="nome"type="text" name="name">

        <!-- <label for="tel">
            <input id="tel" type="text" name="name">
        </label> -->

        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>