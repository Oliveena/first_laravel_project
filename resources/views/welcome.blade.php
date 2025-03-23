<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Firsl Laravel Project</title>
    @vite('resources/css/app.css')
</head>
<body class="text-center" px-8 py-12>
    <h1>Welcome to Ana's Network</h1>
<p>Click the button below to see the list of wound care products.</p>

<a href="/registry" class="btn">Find products</a>

    
</body>
</html>