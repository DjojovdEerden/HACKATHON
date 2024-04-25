<!DOCTYPE html>
<html>
<head>
  <title>Shopping Cart Checkout</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src="script.js"></script>
</head>
<body>
  <h1>Shopping Cart Checkout</h1>

  <div id="cartContainer">
    <h2>Shopping Cart</h2>
    <ul id="cartItems"></ul>
    <button onclick="showCheckout()">Proceed to Checkout</button>
  </div>

  <div id="checkoutContainer" style="display:none;">
    <h2>Checkout</h2>
    <form action="confirm.php" method="post">
      <label>Name:</label>
      <input type="text" name="name" required><br><br>

      <label>Email:</label>
      <input type="email" name="email" required><br><br>

      <label>Address:</label>
      <input type="text" name="address" required><br><br>

      <label>Payment Method:</label>
      <select name="payment_method">
        <option value="credit">Credit Card</option>
        <option value="paypal">PayPal</option>
      </select><br><br>

      <button type="submit">Confirm Order</button>
    </form>
  </div>
</body>
</html>
