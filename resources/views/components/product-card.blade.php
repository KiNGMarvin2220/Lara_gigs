@props(['product'])
<div class="product-container">
    <div class="product-image-container">
        <img class="product-image"
        src="{{asset('storage/' . $product->image_in)}}">
    </div>

    <div class="product-name limit-text-to-2-lines">
        {{$product->name}}
    </div>

    <div class="product-rating-container">
        <img class="product-rating-stars"
        src="images/ratings/rating-{{ ($product->star) * 10 }}.png">
        <div class="product-rating-count link-primary">
            {{$product->count}}
        </div>
    </div>

    <div class="product-price">
        ₱{{ number_format($product->price, 2) }}
    </div>

    <div class="product-spacer"></div>

    <div class="added-to-cart">
        <img src="images/icons/checkmark.png">
        Added
    </div>

    <button class="add-to-cart-button button-primary">
        Add to Cart
    </button>
</div>
