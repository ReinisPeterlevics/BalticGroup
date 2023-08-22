document.addEventListener("DOMContentLoaded", function() {
    const accordionHeaders = document.querySelectorAll(".accordion-header");
    const paymentInput = document.querySelector("#payment-type");

    accordionHeaders.forEach(header => {
    header.addEventListener("click", function() {
        const accordionItem = this.parentElement;
        const paymentMethod = accordionItem.dataset.paymentMethod;
        paymentInput.value = paymentMethod;
        console.log(paymentMethod);
        console.log(paymentInput);
        if (accordionItem.classList.contains("open")) {
        accordionItem.classList.remove("open");
        } else {
            accordionHeaders.forEach(otherHeader => {
            otherHeader.parentElement.classList.remove("open");
        });
        accordionItem.classList.add("open");
        }
    });
    });
});
