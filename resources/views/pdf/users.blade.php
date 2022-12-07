<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Telefono</th>
                <th>Usuario</th>
                <th>Rol</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->Nombre}}</td>
                <td>{{$user->Telefono}}</td>
                <td>{{$user->Usuario}}</td>
                <td>{{$user->Rol}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>