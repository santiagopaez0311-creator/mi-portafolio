
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
</head>
<body>

    <h1>{{ config('app.name') }}</h1>

    <h2>Información del aprendiz SENA</h2>

    <p>Ficha: {{ config('curso.ficha') }}</p>

    <p>Programa: {{ config('curso.programa') }}</p>

    <p>Trimestre: {{ config('curso.trimestre') }}</p>

</body>
</html>
