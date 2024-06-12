<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
   <h1> libros </h1> 
   
   <form action="{{route('libro.store')}}"  method="POST" enctype="multipart/form-data" >
           
    @csrf
    <label>
        titulo:
        <br>
        <input type="string" name="titulo">
    </label>
    <br><br>
    <label>
        numero de paginas:
        <br>
        <input type="number" name="paginas">
    </label>
    <br><br>
    <label>
        editorial: 
        <br>
        <input type="string" name="editorial">
    </label>
    <br><br>
    <label>
        isbn:
        <br>
        <input type="number" name="isbn">
    </label>
    <br><br>

    <button type="submit">buscar libro:</button>
   

</form>

</body>
</html>