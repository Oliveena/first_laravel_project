<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ana's Network</title>

    @vite('resources/css/app.css')
</head>
<body>

    <header>
        <nav><h1>Ana's Network</h1>
        <a href="/registry">All Products</a></nav>
        <a href="/registry/create">Create New Products</a>
    </header>

    <main class="container">
        {{ $slot }}
    </main>
    
</body>
</html>