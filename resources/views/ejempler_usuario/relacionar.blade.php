<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>hola desde relacionar:</h1>

    <form action="{{route('ejempler_usuario.store')}}" method="POST" enctype="multipart/form-data">

        @csrf
     

        <br>
        <h1>ejemplares:</h1>
        <select name="ejempler_id">
            @foreach($ejemplers as $ejempler)
                <option value="{{ $ejempler->id }}">{{ $ejempler->id }} - {{ $ejempler->name }}</option>
            @endforeach
        </select>
        <br>
        <h1>usuarios:</h1>    
        <select name="usuario_id">
            @foreach($usuarios as $usuario)
                <option value="{{ $usuario->id }}">{{ $usuario->id }} - {{ $usuario->name }}</option>
            @endforeach
        </select>
 
       
         <br> <br>
        <button type="submit">asociar:</button>
        </form>
 
</body>
</html>