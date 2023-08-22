<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/app.css" rel="stylesheet" >
    <link href="css/checkout.css" rel="stylesheet" >
    <script src="js/checkout.js"></script>
    <title>Checkout</title>
</head>
<body>
@include('header')
<div class="checkout-container">
    <div class="checkout-content">
        <h1>Checkout</h1><div class="checkout-form-content">
        <div class="checkout-form-container">
            <form >
                <h2>Billing details</h2>
                <div class="input-row">
                    <div class="input-group">
                        <label for="fullname">Full name</label>
                        <input type="text" name="firstname" id="firstname">
                    </div>
                </div>
                <div class="input-row">
                <div class="input-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" pattern=".+@globex\.com" id="email">
                </div>
                </div>
                <div class="input-row">
                <div class="input-group">
                    <label for="phone">Phone number</label>
                    <input type="tel" name="phone" id="phone">
                </div>
                </div>
                <div class="input-row">
                <div class="input-group">
                    <label for="notes">Order notes(optional)</label>
                    <textarea name="notes" id="notes" placeholder="Notes about your order..."></textarea>
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
                <div class="payment-container">
                    <h2>Payment Method</h2>
                <div class="accordion">
                    <div class="accordion-item">
                        <button class="accordion-header">
                            <div>Card</div>
                                <div class="payment-logo-container">
                                    <img class="payment-logo" src="/images/mastercard.png" alt="mastercard-logo">
                                    <img class="payment-logo" src="/images/visa.png" alt="visa-logo">
                                </div>
                        </button>
                        <div class="accordion-content">
                            <div class="accordion-row">
                                <div class="input-group">
                                <input type="text" name="card-number" id="card-number" placeholder="Card number">
                                </div>
                            </div>
                            <div class="accordion-row">
                                <div class="select-group">
                                <select name="month" placeholder="Month">
                                    <option value="" disabled selected>Month</option>
                                    <option value="january">January</option>
                                    <option value="february">February</option>
                                    <option value="march">March</option>
                                    <option value="april">April</option>
                                    <option value="may">May</option>
                                    <option value="june">June</option>
                                    <option value="july">July</option>
                                    <option value="august">August</option>
                                    <option value="september">September</option>
                                    <option value="october">October</option>
                                    <option value="november">November</option>
                                    <option value="december">December</option>
                                </select>
                                </div>
                                <div class="seperator">/</div>
                                <div class="select-group">
                                <select name="Year">
                                    <option value="" disabled selected>Year</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                    <option value="2025">2025</option>
                                    <option value="2026">2026</option>
                                    <option value="2027">2027</option>
                                    <option value="2028">2028</option>
                                    <option value="2029">2029</option>
                                    <option value="2030">2030</option>
                                    <option value="2031">2031</option>
                                </select>
                                </div>
                            </div>
                            <div class="accordion-row">
                            <div class="input-group">
                                <input class="cvc-input" type="text" name="card-cvc" id="card-cvc" placeholder="CVC">
                            </div>
                            <div class="input-group">
                                <p class="cvc-info">3 or 4 digits usually found on the signature strip</p>
                            </div>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">
                        <div>PayPal</div>
                                <div class="payment-logo-container">
                                    <img class="payment-logo" src="/images/paypal.png" alt="paypal-logo">
                                </div>
                        </button>
                        <div class="accordion-content">
                        Content for Section 2.
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">
                        <div>Google Pay</div>
                                <div class="payment-logo-container">
                                    <img class="payment-logo" src="/images/googlepay.png" alt="googlepay-logo">
                                </div>
                        </button>
                        <div class="accordion-content">
                        Content for Section 2.
                        </div>
                    </div>
                    <div class="accordion-item">
                        <button class="accordion-header">
                        <div>Apple Pay</div>
                                <div class="payment-logo-container">
                                    <img class="payment-logo" src="/images/applepay.png" alt="applepay-logo">
                                </div>
                        </button>
                        <div class="accordion-content">
                        Content for Section 2.
                        </div>
                    </div>
                    </div>
                </div>
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
