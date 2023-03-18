<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <form action="{{route('sorvete.store')}}" method="POST">
            @csrf
            <div>
            <label for="">Nome do Sorvete</label>
            <input type="text" name="nome">
            </div>

            <div>
                <label for="">Sabor do sorvete</label>
                <input type="text" name="sabor">
            </div>


            <div>
                <label for="">Sabor do sorvete</label>
                <input type="number" name="valor">
            </div>
            <input type="submit">SALVAR<input>
            <div>

        </form>
    </body>
</html>
