<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Sorvete #{{ $sorvete->id }}</title>
    </head>
    <body>
        <br>
        <h1 class="titulo">Edição dos Sorvetes {{ $sorvete->id }}</h1>

        <form method="POST" action="{{ route('sorvetes.update', $sorvete->id) }}" >
            @csrf
            @method('PUT')

        <div  class="formulario">
            <div>
            <label for="">Nome do Sorvete</label>
            <input type="text" name="nome" value="{{$sorvete->nome}}">
            </div>

            <div>
                <label for="">Sabor do sorvete</label>
                <input type="text" name="sabor" value="{{$sorvete->sabor}}">
            </div>


            <div>
                <label for="">Valor do sorteve</label>
                <input type="number" name="valor" value="{{$sorvete->valor}}">
            </div>

            <br>
            <input type="submit" value="Atualizar sabor" class="botao">
        </div>

        </form>

        <style>


            .titulo{
                text-align: center;
                font-size: 50px;
            }

            .formulario{
                text-align: center;
                font-size: 35px;
                margin-top: 16%;
                border:groove;
                width:28%;
                margin-top: 10%;
                margin-left: 35%;
            }

            body{
                background-image: linear-gradient(to bottom right, #889cff, #ca98ff, #d7b5fc );
            }

            .botao{
                font-size: 25px;
                border-radius: 20px;
            }

        </style>
    </body>
</html>
