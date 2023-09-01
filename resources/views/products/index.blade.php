<x-product-layout  :cartNum="$cartNum">

    <div class="main">
        <div class="products-grid js-products-grid">
            @foreach($products as $product)
            <x-product-card :product="$product" />
            @endforeach
        </div>
    </div>
    
</x-product-layout>