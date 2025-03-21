<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registry of Useful Things | Home</title>
</head>
<body>
    <h2>Currently Available Products</h2>
    <p>{{ $greeting }}</p>

    <ul>
        <li>
            <a href="/registry/{{$products[0]["id"]}}">
                {{ $products[0]["name"] }}
            </a>
        </li>
    </ul>
    
    <ul>
        <li>
            <a href="/registry/{{$products[1]["id"]}}">
                {{ $products[1]["name"] }}
            </a>
        </li>
    </ul>

</body>
</html>
