<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

        <title>Sorvete #{{ $sorvete->id }}</title>
    </head>
    <body>
        <div class="container">
            <h1>Nome do sorvete {{ $sorvete->nome }}

            <h3> Sabor do sorvete {{ $sorvete->sabor }} </h3>

            <h4> Valor do sorvete {{ $sorvete->valor }} </h4>



            <a href="{{ route('sorvetes.index') }}">Voltar a lista</a>
        </div>
    </body>
</html>
