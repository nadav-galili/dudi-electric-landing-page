// Variable to hold the last scroll position
let lastScrollTop = 0;

// Function to check if an element is in the viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return rect.top <= window.innerHeight && rect.bottom >= 0;
}

// Function to handle scroll events
function handleScroll() {
    // Determine the current scroll direction
    const currentScrollTop = window.pageYOffset || document.documentElement.scrollTop;
    const isScrollingDown = currentScrollTop > lastScrollTop;
    lastScrollTop = currentScrollTop;

    // Apply the effect only when scrolling down
    if (isScrollingDown) {
        const elements = document.querySelectorAll(".scroll-appear");
        elements.forEach((element, index) => {
            // Check if the effect has already been applied
            if (!element.classList.contains("effect-applied")) {
                if (isInViewport(element)) {
                    const delay = element.getAttribute("data-delay");
                    setTimeout(() => {
                        element.classList.add("active");
                        element.classList.add("effect-applied"); // Mark the effect as applied
                    }, parseFloat(delay) * 1000); // Convert delay to milliseconds
                }
            }
        });
    }
}

// Add scroll event listener
window.addEventListener("scroll", handleScroll);
