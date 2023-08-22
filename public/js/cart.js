// Show cart overlay
function showCart() {
    document.getElementById("cart").style.height = "100%"
};
// Hide cart overlay
function hideCart() {
    document.getElementById("cart").style.height = "0"
};
// Reduce the count of the item in the cart
function minusCountHandler(id) {
    var count = document.getElementById(id + "-count").value;
    if (count > 1) {
        document.getElementById(id + "-count").value = parseInt(count) - 1;
    } else {
        document.getElementById(id + "-count").value = 0;
        document.getElementById(id).remove();
    }
    recalculateTotal();
};
// Increase the count of the item in the cart
function plusCountHandler(id) {
    var count = document.getElementById(id + "-count").value;
    console.log(count);
    if (parseInt(count) < parseInt(document.getElementById(id + "-count").max)) {
        document.getElementById(id + "-count").value = parseInt(count) + 1;
    }
    recalculateTotal();
};
// Recalculate total cost
function recalculateTotal() {
    var total = 0;
    var cart = document.getElementsByClassName("cart-item");
    for (var i = 0; i < cart.length; i++) {
        total += cart[i].value * document.getElementById(cart[i].id + "-count").value;
    }
    document.getElementById("total-cost").innerHTML = "Total: $" + total.toFixed(0);
};
