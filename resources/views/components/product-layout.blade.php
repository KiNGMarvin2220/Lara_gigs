<!DOCTYPE html>
<html>
  <head>
    <title>Amazon Project</title>

    <!-- This code is needed for responsive design to work.
      (Responsive design = make the website look good on
      smaller screen sizes like a phone or a tablet). -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Load a font called Roboto from Google Fonts. -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">

    <!-- Here are the CSS files for this page. -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('css/funko-header.css') }}">
    <link rel="stylesheet" href="{{ asset('css/pages/funko.css') }}">
  </head>
  <body>
    <div class="amazon-header">
      <div class="amazon-header-left-section">
        <a href="/" class="header-link">
          <img class="amazon-logo"
            src="{{ asset('images/amazon-logo-white.png') }}">
          <img class="amazon-mobile-logo"
            src="{{ asset('images/amazon-mobile-logo-white.png') }}">
        </a>
      </div>

      <form action="/products" class="AHMS">
        <div class="amazon-header-middle-section">
          <input name="search" class="search-bar" type="text" placeholder="Search">

          <button type="submit" class="search-button">
            <img class="search-icon" src="{{ asset('images/icons/search-icon.png') }}">
          </button>
        </div>
      </form>

      <div class="amazon-header-right-section">
        <a class="orders-link header-link" href="orders.html">
          <span class="returns-text">Returns</span>
          <span class="orders-text">& Orders</span>
        </a>

        <a class="cart-link header-link" href="checkout.html">
          <img class="cart-icon" src="{{ asset('images/icons/cart-icon.png') }}">
          <div class="cart-quantity js-cart-quantity">{{ $cartNum }}</div>
          <div class="cart-text">Cart</div>
        </a>
      </div>
    </div>
    
        <main>
          {{$slot}}
        </main>
{{-- 
    <script src="{{ asset('js/data/cart.js') }}"></script>
    <script src="{{ asset('js/data/products.js') }}"></script>
    <script src="{{ asset('js/amazon.js') }}"></script> --}}
    
  </body>
</html>
