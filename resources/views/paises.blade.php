<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha512-P5MgMn1jBN01asBgU0z60Qk4QxiXo86+wlFahKrsQf37c9cro517WzVSPPV1tDKzhku2iJ2FVgL67wG03SGnNA==" crossorigin="anonymous" />
    <title>Document</title>
</head>
<body>

    <center><h1>Lista de Paises</h1></center>

    <table class="table table-hover table-striped">
        <tr class="bg-dark">
            <th class="text-primary">Nombre</th>
            <th class="text-danger">Capital</th>
            <th class="text-success">Moneda</th>
            <th class="text-muted">Población</th>
        </tr>
        @foreach ($Naciones as $nombre => $nacion)
            <tr class="bg-warning">
                <td>{{$nombre}}</td>
                <td>{{$nacion["capital"]}}</td>
                <td>{{$nacion["moneda"]}}</td>
                <td>{{$nacion["poblacion"]}}</td>
            </tr>
        @endforeach
    </table>
</body>
</html>
