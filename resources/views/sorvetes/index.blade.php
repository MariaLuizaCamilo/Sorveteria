<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1 text-aling="center">SORVETERIA</h1>
    <a href="{{ route('sorvetes.create') }}" >Novo Sorvete</a>

    <div>
        <h1 class="center">Lista de sabores</h1>

        <table class="table table-hover table-bordered table-primary">
            <tr class="table-dark">
                <th>nome</th>
                <th>sabor</th>
                <th>valor</th>
                <th></th>
            </tr>

            @foreach ($sorvetes as $sorvete)
                <tr>
                    <td>{{ $sorvete->nome }}</td>
                    <td>{{ $sorvete->sabor }}</td>
                    <td>{{ $sorvete->valor }}</td>
                    <td>
                        <a class="link" href="{{ route('sorvetes.show', $sorvete->id) }}">
                            Ver
                        </a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
