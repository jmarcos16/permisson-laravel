<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Permission</title>
</head>

<body>
    @can('admin')
        <h1>Você é admin</h1>
    @endcan

    @can('default')
        <h1>Você e usuário</h1>
    @endcan

    <h1>Todos podem acessar</h1>
</body>

</html>
