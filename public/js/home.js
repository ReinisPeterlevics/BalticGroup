// Update the range input labels
function rangeInputHandler(range) {
    document.getElementById(range.id + "Label").innerHTML = range.value;
}
// Reset select option
function resetSelect(event, id) {
    let key = (event.keyCode);
    if (key === 8|| key === 46) {
        document.getElementById(id).selectedIndex = -1;
    }
}
