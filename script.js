let cartItems = [];

function showCheckout() {
  document.getElementById("cartContainer").style.display = "none";
  document.getElementById("checkoutContainer").style.display = "block";
}

function addToCart(item) {
  cartItems.push(item);
  updateCart();
}

function updateCart() {
  let cartItemsHTML = "";
  for (let i = 0; i < cartItems.length; i++) {
    cartItemsHTML += "<li>" + cartItems[i] + "</li>";
  }
  document.getElementById("cartItems").innerHTML = cartItemsHTML;
}
