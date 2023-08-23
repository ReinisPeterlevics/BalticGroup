document.addEventListener('DOMContentLoaded', function() {
    var closePopupButton = document.getElementById('closePopupButton');

const popup = document.getElementById('orderPlacedPopup');

    // Show the popup
    popup.style.display = 'block';

    // Close the popup when the close button is clicked
    closePopupButton.addEventListener('click', function() {
        orderPlacedPopup.style.display = 'none';
    });
    // Close the popup when the window is clicked
    window.addEventListener('click', (event) => {
        if (event.target === popup) {
            popup.style.display = 'none';
        }
    });
});
