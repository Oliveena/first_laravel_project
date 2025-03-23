<!--gets output where the slot variable is in layout.blade.php-->

<x-layout>
    <h2>Currently Available Products</h2>

    <p>{{ $greeting }}</p>

    <ul>
        @foreach($products as $product)
            <li>
                <x-card href="/registry/{{ $product['id'] }}" :highlight="$product['price'] > 50">
                    <h3>{{ $product['name'] }}</h3>
                </x-card>
            </li>        
        @endforeach
    </ul>
</x-layout>
