<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form method="POST" action="{{ route('sorvetes.store') }}">

            @csrf

        <div  class="formulario">
            <div>
            <label for="">Nome do Sorvete</label>
            <input type="text" name="nome">
            </div>

            <div>
                <label for="">Sabor do sorvete</label>
                <input type="text" name="sabor">
            </div>


            <div>
                <label for="">Valor do sorteve</label>
                <input type="number" name="valor">
            </div>


            <input type="submit" value="Salvar" class="botao">
        </div>

        </form>

        <style>
            .formulario{
                text-align: center;
                font-size: 35px;
                margin-top: 16%;
                border:groove;

            }

            body{
                background-color: rgb(199, 152, 243);.
            }

            .botao{
                font-size: 25px;
                border-radius: 20px;
            }

        </style>
    </body>
</html>
