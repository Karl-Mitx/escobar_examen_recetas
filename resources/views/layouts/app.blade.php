<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background: #f7f7f7;
            color: #333;
        }
        header {
            background: #2d3748;
            color: white;
            padding: 1rem;
        }
        main {
            max-width: 960px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
    </style>
</head>
<body>
    <header>
        <div>
            <h1>Recetas</h1>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
</body>
</html>