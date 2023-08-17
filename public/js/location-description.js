function rangeInputHandler(range) {
    document.getElementById(range.id + "Label").innerHTML = range.value;
    document.getElementById("total-cost").innerHTML = "Price in total: " + range.value * 1500 + "EUR";
}
