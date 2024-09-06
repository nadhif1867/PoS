<html>
    <head>
        <title>Products</title>
    </head>
    <body>
        <h1>Kategori: {{$category}}</h1>
        <ul>
            @foreach($products as $product)
                <li>{{ $product['nama'] }}</li>
            @endforeach
        </ul>
    </body>
</html>