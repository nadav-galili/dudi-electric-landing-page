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

///add current year to footer at the end of the p with id="year"

const year = new Date().getFullYear();
let pElement = document.getElementById("year");
pElement.innerHTML = pElement.innerHTML + " " + year;

// Cookie Consent Logic
document.addEventListener('DOMContentLoaded', function() {
    const cookieConsentOverlay = document.getElementById('cookieConsent');
    const acceptButton = document.getElementById('acceptCookies');
    const rejectButton = document.getElementById('rejectCookies');
    
    // Check if user has already made a choice
    const cookieConsent = getCookie('cookieConsent');
    
    if (cookieConsent === null) {
        // Show consent screen if no previous choice
        showConsentScreen();
    } else {
        // Hide consent screen if choice was made
        hideConsentScreen();
        
        // Handle analytics based on previous choice
        if (cookieConsent === 'accepted') {
            enableAnalytics();
        } else {
            disableAnalytics();
        }
    }
    
    // Accept button click handler
    acceptButton.addEventListener('click', function() {
        setCookie('cookieConsent', 'accepted', 365);
        hideConsentScreen();
        enableAnalytics();
    });
    
    // Reject button click handler
    rejectButton.addEventListener('click', function() {
        setCookie('cookieConsent', 'rejected', 365);
        hideConsentScreen();
        disableAnalytics();
    });
});

// Cookie utility functions
function setCookie(name, value, days) {
    const expires = new Date();
    expires.setTime(expires.getTime() + (days * 24 * 60 * 60 * 1000));
    document.cookie = `${name}=${value};expires=${expires.toUTCString()};path=/;SameSite=Lax`;
}

function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for (let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
}

function showConsentScreen() {
    const cookieConsentOverlay = document.getElementById('cookieConsent');
    if (cookieConsentOverlay) {
        cookieConsentOverlay.classList.remove('cookie-consent-hidden');
        cookieConsentOverlay.style.display = 'flex';
    }
}

function hideConsentScreen() {
    const cookieConsentOverlay = document.getElementById('cookieConsent');
    if (cookieConsentOverlay) {
        cookieConsentOverlay.classList.add('cookie-consent-hidden');
        cookieConsentOverlay.style.display = 'none';
    }
}

function enableAnalytics() {
    // Enable Google Analytics if consent is given
    if (typeof gtag !== 'undefined') {
        gtag('consent', 'update', {
            'analytics_storage': 'granted'
        });
    }
}

function disableAnalytics() {
    // Disable Google Analytics if consent is denied
    if (typeof gtag !== 'undefined') {
        gtag('consent', 'update', {
            'analytics_storage': 'denied'
        });
    }
    
    // Clear existing Google Analytics cookies
    const gaCookies = ['_ga', '_ga_GA_MEASUREMENT_ID', '_gid', '_gat'];
    gaCookies.forEach(cookieName => {
        document.cookie = `${cookieName}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/;`;
        document.cookie = `${cookieName}=; expires=Thu, 01 Jan 1970 00:00:00 UTC; path=/; domain=.${window.location.hostname};`;
    });
}
