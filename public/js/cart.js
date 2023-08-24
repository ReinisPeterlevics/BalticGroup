// Show cart overlay
function showCart() {
    recalculateTotal();
    document.getElementById("cart").style.height = "100%"
};
// Hide cart overlay
function hideCart() {
    recalculateTotal();
    document.getElementById("cart").style.height = "0"
};
// Reduce the count of the item in the cart
function minusCountHandler(id) {
    let count = document.getElementById(id + "-count").value;
    document.getElementById(id + "-count").value = parseInt(count) - 1;
    recalculateTotal();
};
// Increase the count of the item in the cart
function plusCountHandler(id) {
    let count = document.getElementById(id + "-count").value;
    if (parseInt(count) < parseInt(document.getElementById(id + "-count").max)) {
        let quantity = parseInt(count) + 1;
        document.getElementById(id + "-count").value = quantity;
    }
    recalculateTotal();
};
// Recalculate total cost
function recalculateTotal() {
    let total = 0;
    let cart = document.getElementsByClassName("cart-item");
    if (cart.length > 0){
        for (let i = 0; i < cart.length; i++) {
            total += cart[i].value * document.getElementById(cart[i].id + "-count").value;
        }
        document.getElementById("total-cost").innerHTML = "Total: " + total.toFixed(0) + " €";
    }
};
