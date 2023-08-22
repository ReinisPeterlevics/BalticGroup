document.addEventListener("DOMContentLoaded", function() {
    const accordionHeaders = document.querySelectorAll(".accordion-header");

    accordionHeaders.forEach(header => {
    header.addEventListener("click", function() {
        const accordionItem = this.parentElement;
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
