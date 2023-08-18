<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/app.css" rel="stylesheet" >
    <link href="css/checkout.css" rel="stylesheet" >
    <title>Checkout</title>
</head>
<body>
@include('header')
<div class="checkout-container">
    <div class="checkout-content">
        <h1>Checkout</h1><div class="checkout-form-content">
        <div class="checkout-form-container">
            <form>
                <h2>Billing details</h2>
                <div class="input-row">
                    <div class="input-group">
                        <label for="firstname">First name</label>
                        <input type="text" name="firstname" id="firstname">
                    </div>
                    <div class="input-group">
                        <label for="lastname">Last name</label>
                        <input type="text" name="lastname" id="lastname">
                    </div>
                </div>
                <div class="input-row">
                <div class="input-group">
                    <label for="country">Country/Region</label>
                    <input type="text" name="country" id="country">
                </div>
                <div class="input-group">
                    <label for="city">Town/City</label>
                    <input type="text" name="city" id="city">
                </div>
                </div>
                <div class="input-row">
                <div class="input-group">
                    <label for="address">Address</label>
                    <input type="text" name="address" id="address" placeholder="House number and street name">
                </div>
                <div class="input-group">
                    <label for="postcode">Postcode/ZIP</label>
                    <input type="text" name="postcode" id="postcode">
                </div>
                </div>
                <div class="input-row">
                <div class="input-group">
                    <label for="phone">Phone number</label>
                    <input type="tel" name="phone" id="phone">
                </div>
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" pattern=".+@globex\.com" id="email">
                </div>
                </div>
                <div class="input-row">
                <div class="input-group">
                    <label for="order-notes">Order notes(optional)</label>
                    <textarea name="order-notes" id="order-notes" placeholder="Notes about your order..."></textarea>
                </div>
                </div>
            </form>
        </div>
        <div class="checkout-cart-container">
            <h2>Your order</h2>
            <div class="checkout-cart">
                <div class="checkout-table-container">
                <table class="checkout-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Item Price</th>
                    <th>Quantity</th>
                    <th>Price</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="item-name">Diving in Maldives</td>
                    <td class="item-price">$1500</td>
                    <td class="quantity">2</td>
                    <td class="total-item-price">$3000</td>
                </tr>
                <tr>
                    <td class="item-name">Hiking in Alps</td>
                    <td class="item-price">$100</td>
                    <td class="quantity">1</td>
                    <td class="total-item-price">$3000</td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="3" class="price">Total price:</td>
                    <td class="total-price">$4000</td>
                </tr>
            </tfoot>
        </table>
                </div>
                <div class="checkout-footer">
            <button type="submit" class="checkout-button">Place order</button></div>
        </div>
            </div>
        </div>
        </div>
</div>
@include('footer')
</body>
</html>
