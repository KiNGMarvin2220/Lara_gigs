let cartQauntity = 0;
let productsHtml = '';
products.forEach((product) => {
 
 productsHtml += `
 <div class="product-container">
   <div class="product-image-container">
     <img class="product-image"
     src="${product.image}">
   </div>

   <div class="product-name limit-text-to-2-lines">
     ${product.name}
   </div>

   <div class="product-rating-container">
     <img class="product-rating-stars"
       src="images/ratings/rating-${product.rating.stars * 10}.png">
     <div class="product-rating-count link-primary">
       ${product.rating.count}
     </div>
   </div>

   <div class="product-price">
     $${(product.priceCents / 100).toFixed(2)}
   </div>

   <div class="product-quantity-container">
     <select>
       <option selected value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
       <option value="6">6</option>
       <option value="7">7</option>
       <option value="8">8</option>
       <option value="9">9</option>
       <option value="10">10</option>
     </select>
   </div>

   <div class="product-spacer"></div>

   <div class="added-to-cart">
     <img src="images/icons/checkmark.png">
     Added
   </div>

   <button class="add-to-cart-button button-primary js-add-to-cart" data-product-id="${product.id}">
     Add to Cart
   </button>
 </div>
 `;
});

/// DOM Change Element content.
/// Element content contain alot of html codes
/// This will list down all product
/// productsHtml is looped base of how many Item are in data 
document.querySelector('.products-grid').innerHTML = productsHtml;


/// DOM Looping All Selected '.js-add-to-cart'/(class) in HTML
/// Here the class '.js-add-to-cart' are (alot of) buttons
///
//>> Part 1 Selecting all html class contain '.js-add-to-cart'
/// in this example this document.querySelectorAll will have a array Object
document.querySelectorAll('.js-add-to-cart')

//>> Part 2 ForEach Loop
/// Now the QuerySelector is now an array
/// forEach array that QuerySelector has, will pass to button parameter
/// button parameter will change in each iteration
.forEach((button) => { 

//>> Part 3 Adding (click) EventListener/Function forEach button
/// click: The function will be execute whenever the element is clicked
  button.addEventListener('click', () => {

//>> Part 4 Getting the ID of an Element
/// here were passing the value of dataset attribe to const productId
    const productId = button.dataset.productId;

//>> matchingItem this is the preparation to check if the Id Is already clicked once(or more)
    let matchingItem;
//>> cart here is never mention in this .js file, because it is separate .js file that is already mention in HTML before this script

/// What were doing here is checking on Loop for each ID if it is already on cart, if does, Add pass it to mactchingItem variable add 1 on its quantity..
/// If not push it to cart as new cart
    cart.forEach((item) => {
      if (productId === item.productId){
        matchingItem = item;
      }
    });

      if (matchingItem) {
        matchingItem.quantity += 1;
      } else {
        cart.push({
          productId: productId,
          quantity: 1
        });
      }
    cartQauntity = 0;
    cart.forEach((item) => {
      cartQauntity += item.quantity;
    });
    document.querySelector('.js-cart-quantity').innerHTML = cartQauntity;
  });

  //console.log(button);
  /// DOM Content manipulation using HTML class
  ///this will change the cart quantity
  ///change Element content of '.cart-quantity'
  ///  document.querySelector('.js-cart-quantity').innerHTML = cartQauntity;
});