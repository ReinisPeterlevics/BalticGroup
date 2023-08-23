// Update the range input labels
function rangeInputHandler() {
    // Get the value of the range input
    let personCount = document.getElementById("person-count").value;
    let personCost = document.getElementById("person-cost").value;
    let totalCost = personCount * personCost;
    // Set the value of the range input labels
    document.getElementById("person-label").innerHTML = personCount;
    document.getElementById("total-cost-p").innerHTML = "Price in total: " + totalCost + "EUR";
}
