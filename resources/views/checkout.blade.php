<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/app.css" rel="stylesheet">
    <link href="css/checkout.css" rel="stylesheet">
    <link href="css/cart.css" rel="stylesheet">
    <link href="css/location.css" rel="stylesheet">
    <link href="css/confirmed.css" rel="stylesheet">
    <script src="js/checkout.js"></script>
    <script src="js/cart.js"></script>
    <title>Magebit Travel</title>
</head>

<body>
    <div class="app">
        <div class="app-container">
            @include('header')
            @include('cart')
            @if(!empty(Session::get('cartIsVisible')) && Session::get('cartIsVisible') == true)
    <script>
        showCart();
    </script>
@endif
<div class="checkout-container">
                <div class="checkout-content">
                    <h1 class="checkout-title">Checkout</h1>
                    <form class="checkout-form" method="post" action="{{ route('save-order')}}">
                        @csrf
                        <div class="checkout-form-content">
                            <div class="checkout-form-container">
                                <h2>Billing details</h2>
                                <div class="billing-form">
                                    <div class="input-row">
                                        <div class="input-group">
                                            <label for="fullname">Full name</label>
                                            <input class="checkout-input diabled" type="text" value="{{$user->name}}" disabled>
                                        </div>
                                    </div>
                                    <div class="input-row">
                                        <div class="input-group">
                                            <label for="email">Email</label>
                                            <input class="checkout-input disabled" type="email" value="{{$user->email}}" disabled>
                                        </div>
                                    </div>
                                    <div class="input-row">
                                        <div class="input-group">
                                            <label for="phone">Phone number</label>
                                            <input class="checkout-input" pattern="[0-9]{8}" type="tel" name="phone-number" required>
                                        </div>
                                    </div>
                                    <div class="input-row">
                                        <div class="input-group">
                                            <label for="notes">Additional information(optional)</label>
                                            <textarea name="notes" placeholder="Add comments..."></textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="checkout-cart-container">
                                <h2>Your booking details</h2>
                                <div class="checkout-cart">
                                    <div class="checkout-table-container">
                                        <table class="checkout-table">
                                            <thead>
                                                <tr>
                                                    <th>Tour name</th>
                                                    <th>Tour price</th>
                                                    <th>Quantity</th>
                                                    <th>Price</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($processedOrders as $order)
                                                <tr>
                                                    <td class="item-name">{{$order['locationName']}}</td>
                                                    <td class="item-price">${{$order['locationPrice']}}</td>
                                                    <td class="quantity">{{$order['quantity']}}</td>
                                                    <td class="total-item-price">${{$order['locationSubPrice']}}</td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="3" class="price">Total:</td>
                                                    <td class="total-price">${{$totalPrice}}</td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <div class="payment-container">
                                        <h2>Payment Method</h2>
                                        <div class="accordion">
                                            <div class="accordion-item" data-payment-method="1">
                                                <button type="button" class="accordion-header">
                                                    <div class="payment-name">Card</div>
                                                    <div class="payment-logo-container">
                                                        <img class="payment-logo" src="/images/mastercard.png" alt="mastercard-logo">
                                                        <img class="payment-logo" src="/images/visa.png" alt="visa-logo">
                                                    </div>
                                                </button>
                                                <div class="accordion-content">
                                                    <div class="accordion-row">
                                                        <div class="input-group">
                                                            <input class="card-input" type="text" name="card-number" id="card-number"  pattern="[0-9]{16}"  title="Enter a valid 16-digit card number"   placeholder="Card number" required>
                                                        </div>
                                                    </div>
                                                    <div class="accordion-row">
                                                        <div class="select-group">
                                                            <select name="month" required>
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
                                                            <select name="Year" required>
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
                                                            <input class="cvc-input" type="text" name="card-cvc" id="card-cvc"  pattern="[0-9]{3,4}" title="Enter a valid 3 or 4-digit CVC code" placeholder="CVC" required>
                                                        </div>
                                                        <div class="input-group">
                                                            <p class="cvc-info">3 or 4 digits usually found on the signature strip</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item" data-payment-method="2">
                                                <button type="button" class="accordion-header">
                                                    <div class="payment-name">PayPal</div>
                                                    <div class="payment-logo-container">
                                                        <img class="payment-logo" src="/images/paypal.png" alt="paypal-logo">
                                                    </div>
                                                </button>
                                                <div class="accordion-content">
                                                    Coming soon...
                                                </div>
                                            </div>
                                            <div class="accordion-item" data-payment-method="3">
                                                <button type="button" class="accordion-header">
                                                    <div class="payment-name">Google Pay</div>
                                                    <div class="payment-logo-container">
                                                        <img class="payment-logo" src="/images/googlepay.png" alt="googlepay-logo">
                                                    </div>
                                                </button>
                                                <div class="accordion-content">
                                                    Coming soon...
                                                </div>
                                            </div>
                                            <div class="accordion-item" data-payment-method="4">
                                                <button type="button" class="accordion-header">
                                                    <div class="payment-name">Apple Pay</div>
                                                    <div class="payment-logo-container">
                                                        <img class="payment-logo" src="/images/applepay.png" alt="applepay-logo">
                                                    </div>
                                                </button>
                                                <div class="accordion-content">
                                                    Coming soon...
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout-footer">
                                    <input type="hidden" name="payment-type-id" value="" id="payment-type">
                                    <button type="submit" class="checkout-button" onclick="showConfirmed()">Place order</button>
                                </div>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
        @include('footer')
    </div>
    </div>
</body>

</html>
