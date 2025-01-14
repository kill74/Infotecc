// Mobile Menu
const mobileMenu = document.getElementById('mobile-menu');
const navLinks = document.querySelector('.nav-links');

if (mobileMenu && navLinks) {
  mobileMenu.addEventListener('click', () => {
    navLinks.classList.toggle('active');
    mobileMenu.classList.toggle('active');
    document.body.classList.toggle('no-scroll'); // Prevent scrolling when menu is open
  });

  // Close mobile menu when a link is clicked
  navLinks.querySelectorAll('a').forEach((link) => {
    link.addEventListener('click', () => {
      navLinks.classList.remove('active');
      mobileMenu.classList.remove('active');
      document.body.classList.remove('no-scroll'); // Re-enable scrolling
    });
  });

  // Close mobile menu when clicking outside
  document.addEventListener('click', (e) => {
    if (!navLinks.contains(e.target) && !mobileMenu.contains(e.target)) {
      navLinks.classList.remove('active');
      mobileMenu.classList.remove('active');
      document.body.classList.remove('no-scroll');
    }
  });
}

// Smooth Scroll with fallback and offset for fixed header
const smoothScroll = (targetElement, offset = 80) => {
  const targetPosition =
    targetElement.getBoundingClientRect().top + window.scrollY - offset;

  if ('scrollBehavior' in document.documentElement.style) {
    window.scrollTo({
      top: targetPosition,
      behavior: 'smooth',
    });
  } else {
    window.scrollTo(0, targetPosition);
  }
};

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();
    const targetId = this.getAttribute('href');
    const targetElement = document.querySelector(targetId);
    if (targetElement) smoothScroll(targetElement);
  });
});

// Animate on Scroll with Intersection Observer (modern and performant)
const animateOnScroll = () => {
  const elements = document.querySelectorAll('.animate__animated');

  const observerOptions = {
    root: null,
    rootMargin: '0px',
    threshold: 0.2, // Trigger when 20% of the element is visible
  };

  const observerCallback = (entries, observer) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('animate__fadeInUp');
        observer.unobserve(entry.target); // Stop observing after animation
      }
    });
  };

  const observer = new IntersectionObserver(observerCallback, observerOptions);

  elements.forEach((element) => {
    observer.observe(element);
  });
};

// Back to Top Button
const backToTopButton = document.createElement('button');
backToTopButton.innerHTML = '↑';
backToTopButton.classList.add('back-to-top');
backToTopButton.setAttribute('aria-label', 'Voltar ao topo');
document.body.appendChild(backToTopButton);

backToTopButton.addEventListener('click', () => {
  window.scrollTo({
    top: 0,
    behavior: 'smooth',
  });
});

// Show/hide back-to-top button based on scroll position
const handleScroll = () => {
  if (window.scrollY > 500) {
    backToTopButton.classList.add('show');
  } else {
    backToTopButton.classList.remove('show');
  }
};

// Throttle scroll events for better performance
const throttle = (func, limit = 100) => {
  let inThrottle;
  return function () {
    const args = arguments;
    const context = this;
    if (!inThrottle) {
      func.apply(context, args);
      inThrottle = true;
      setTimeout(() => (inThrottle = false), limit);
    }
  };
};

window.addEventListener('scroll', throttle(handleScroll));

// Trigger animations on page load
document.addEventListener('DOMContentLoaded', () => {
  animateOnScroll(); // Initialize Intersection Observer
});

// Prevent body scroll when mobile menu is open
const preventBodyScroll = () => {
  document.body.classList.toggle('no-scroll');
};

const style = document.createElement('style');
style.innerHTML = `
  .no-scroll {
    overflow: hidden;
    height: 100%;
  }
`;
document.head.appendChild(style);
