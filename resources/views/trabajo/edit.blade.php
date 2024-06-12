<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Actualizar</title>
</head>
<body>

    <form action="{{route('trabajo.update', $trabajo)}}"  method="POST">

        @csrf
        @method('put')
        <label>
            Titulo:
        <br>
        <input name="titulo" type="string" value="{{old('Titulo',$trabajo->titulo) }}">
        <br>
        </label>
        <br>
        <label>
            numero de paginas:
        <br>
        <input name="paginas" type="number" value="{{old('Paginas',$trabajo->paginas)}}">
        <br>
        </label>
        editorial:
        <br>
        <input name="editorial" type="string" value="{{old('Editorial',$trabajo->editorial)}}">
        <br>
        </label>
        isbn:
        <br>
        <input name="isbn" type="number" value="{{old('Isbn',$trabajo->isbn)}}">
        <br>
       
        </label>
        <br>
       
        <button  type="submit">buscar libro</button>
       
    </form>
   
</body>
</html>