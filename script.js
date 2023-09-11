document.addEventListener("scroll", function () {
    const stickyButtons = document.querySelector(".sticky-buttons"); // Assuming there's only one .sticky-buttons element

    const scrollPosition = window.scrollY;
    const elements = document.querySelectorAll(".col-md-4.col-sm-12");

    const windowHeight = window.innerHeight;
    const documentHeight = document.documentElement.scrollHeight;

    // Show the elements when scroll position is greater than 100 pixels
    if (scrollPosition > 100) {
        elements.forEach((element, index) => {
            setTimeout(() => {
                element.style.opacity = "1";
            }, index * 500); // 500ms delay for each element
        });

        // Make the buttons sticky
        stickyButtons.style.position = "fixed";
        stickyButtons.style.width = "100%";
        stickyButtons.style.zIndex = "1000";

        // If the user has scrolled to the bottom of the page
        if (scrollPosition + windowHeight >= documentHeight) {
            stickyButtons.style.bottom = "0";
        } else {
            stickyButtons.style.bottom = "10%";
        }
    } else {
        elements.forEach((element) => {
            element.style.opacity = "0";
        });

        // Remove the sticky position from the buttons
        stickyButtons.style.position = "static";
    }
});
