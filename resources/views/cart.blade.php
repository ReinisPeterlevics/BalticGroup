<?php

$cartItems = App\Helpers\CartHelper::getLocationsAndCartItems();

?>
<div id="cart" class="cart-overlay">
    <div class="cart-wrapper">
        <div class="cart-container">
            <div class="cart-header">
                <h1>Your Travel Cart</h1>
                <div>
                    <button type="button" onclick="hideCart()" class="close-button">&times</button>
                </div>
            </div>
            @if($cartItems)
            <ul class="cart-items">
                @foreach($cartItems as $item)
                <li class="cart-item" id="{{$item['location_id']}}" value="{{$item['price']}}">
                    <img src="{{$item['image']}}" alt="mountains" class="cart-item-image">
                    <div class="cart-item-info">
                        <div class="cart-item-details">
                            <h3 class="cart-item-title">{{$item['name']}}</h3>
                            <p class="cart-item-country">{{$item['countryname']}}</p>
                        </div>
                        <div class="cart-item-quantity">
                            <!-- Location price here -->
                            <p class="cart-item-price">{{$item['price']}} €</p>
                            <div class="buttons">
                                <form method="POST" action="{{ route('update-cart-quantity', ['id'=>$item['location_id']]) }}">
                                    @csrf
                                    <button class="minus-button" type="submit" onclick="minusCountHandler(`{{$item['location_id']}}`)">-</button>
                                    <!-- Start value the one that user selected and max read from the table -->
                                    <input type="number" id="{{$item['location_id']}}-count" name="{{$item['location_id']}}-count" class="cart-item-count" value="{{$item['quantity']}}" min="0" max="{{$item['spots_left']}}">
                                    <button class="plus-button" type="submit" onclick="plusCountHandler(`{{$item['location_id']}}`)">+</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="cart-summary">
                <div class="cart-summary-title">
                    <!-- Total cost -->
                    <h2 id="total-cost">Total: 1700 €</h2>
                </div>
                <div class="checkout-button">
                    <!-- To the checkout! -->
                    <button><a href="{{route('fill-data')}}">Checkout</a></button>
                </div>
            </div>
            @else
            <p class="empty-cart">Your cart is empty!</p>
            @endif
        </div>
    </div>
</div>
