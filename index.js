let cart = {};

window.onload = function () {
    const savedCart = localStorage.getItem('cart');
    if (savedCart) {
        cart = JSON.parse(savedCart);
        updateCartDisplay();
    }
   
};

function add_to_cart(productName, productPrice, productID){
    const key = `${productID}-${productName}`;
    if (cart[key]) {
        cart[key].quantity += 1;
        cart[key].totalPrice += productPrice;
    } else {
        cart[key] = {
            name: productName,
            quantity: 1,
            totalPrice: productPrice
        };
    }
    saveCart();   
    updateCartDisplay();
}

function updateCartDisplay() {
    const cartList = document.getElementById('cart');
    cartList.innerHTML = '';
    for (let key in cart) {
        const item = cart[key];
        const listItem = document.createElement('li');
        listItem.innerText = `${item.name} - Quantity: ${item.quantity} - Total Price: $ ${item.totalPrice.toFixed(2)}`;
        cartList.appendChild(listItem);
    }
}

function cartPage() {
    cart = JSON.parse(localStorage.getItem('cart')) || {};

    const cartContainer = document.getElementById('cart-items');

    if (Object.keys(cart).length === 0) {
    cartContainer.innerHTML = "<p>Your cart is empty.</p>";
    } else {
    let total = 0;
    for (let key in cart) {
    const item = cart[key];
    total += item.totalPrice;
  
    const imageID = key.split('-')[0];
  
    const itemDiv = document.createElement('div');
    itemDiv.className = 'cart-product';
    itemDiv.innerHTML = `
      <img src="images/${imageID}.jpg" width="100">
      <h3>${item.name}</h3>
      <p>Quantity: ${item.quantity}</p>
      <p>Total Price: $ ${item.totalPrice.toFixed(2)}</p>
      <hr>
    `;
    cartContainer.appendChild(itemDiv);
  }
  

  const totalDisplay = document.createElement('h3');
  totalDisplay.innerText = `Total: $ ${total.toFixed(2)}`;
  cartContainer.appendChild(totalDisplay);
}
}



function saveCart() {
    localStorage.setItem('cart', JSON.stringify(cart));
}

function clearCart() {
    cart = {};
    localStorage.removeItem('cart');

   
    if (document.getElementById('cart-items')) {
        cartPage();
    } else {
        updateCartDisplay();
    }
}

if (document.getElementById('cart-items')) {
    cartPage();
}



