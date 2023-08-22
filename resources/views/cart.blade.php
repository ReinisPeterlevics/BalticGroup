<div id="cart" class="cart-overlay">
    <div class="cart-wrapper">
        <div class="cart-container">
            <div class="cart-header">
                <h1>Your Travel Cart</h1>
                <div>
                    <button type="button" onclick="hideCart()" class="close-button">&times</button>
                </div>
            </div>
            <ul class="cart-items">
                <!-- For each goes here -->
                <li class="cart-item" id="LOCATION_ID_HERE" value="600">
                    <!-- Location image here -->
                    <img src="images/paragliding.jpg" alt="mountains" class="cart-item-image">
                    <div class="cart-item-info">
                        <div class="cart-item-details">
                            <h3 class="cart-item-title">LOCATION_TITLE_HERE</h3>
                            <p class="cart-item-country">LOCATION_COUNTRY_HERE</p>
                        </div>
                        <div class="cart-item-quantity">
                            <!-- Location price here -->
                            <p class="cart-item-price">$600</p>
                            <div class="buttons">
                                <button class="minus-button" onclick="minusCountHandler('LOCATION_ID_HERE')">-</button>
                                <!-- Start value the one that user selected and max read from the table -->
                                <input type="number" id="LOCATION_ID_HERE-count" class="cart-item-count" value="1" min="1" max="10">
                                <button class="plus-button" onclick="plusCountHandler('LOCATION_ID_HERE')">+</button>
                            </div>
                        </div>
                    </div>
                </li>
                <!-- For each ends here -->
            </ul>
            <div class="cart-summary">
                <div class="cart-summary-title">
                    <!-- Total cost -->
                    <h2 id="total-cost">Total: $1700</h2>
                </div>
                <div class="checkout-button">
                    <button><a href="#">Checkout</a></button>
                </div>
            </div>
        </div>
    </div>
</div>
