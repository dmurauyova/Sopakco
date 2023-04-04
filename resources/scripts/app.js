import domReady from '@roots/sage/client/dom-ready';
import AOS from 'aos';
import Rellax from 'rellax';
/**
 * Application entrypoint
 */
window.addEventListener('load', function() {
  // Wait for the first frame to be rendered
  if (window.requestAnimationFrame) {
      window.requestAnimationFrame(function() {
          hidePreloader();
      });
  } else {
      setTimeout(function() {
          hidePreloader();
      }, 1000); // Change the timeout duration if needed
  }
});

function hidePreloader() {
  const preloader = document.querySelector('.preloader');
  preloader.classList.add('fade-out');
  setTimeout(function() {
      preloader.style.display = 'none';
  }, 500); // Change the duration of the fade-out animation if needed
}

domReady(async () => {
  AOS.init();
  new Rellax('.rellax');
  //Slider
  const swiper = new Swiper('.swiper', {
    // Optional parameters
    loop: true,
    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
    autoHeight: false,
    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {
      1024: {
        autoHeight: true,
      },
    },
  });

  //Menu
  const mainMenuButton = document.getElementById('main-menu-button');
  const mainMenu = document.getElementById('mobile-menu');
  const mainMenuWrapper = document.getElementById('mobile-menu-wrapper');
  const mainMenuOverlay = document.getElementById('mobile-menu-overlay');


  mainMenuButton.addEventListener('click', () => {
    const isExpanded = mainMenuButton.getAttribute('aria-expanded') === 'true';
    mainMenuWrapper.classList.toggle('invisible');
    mainMenuButton.setAttribute('aria-expanded', !isExpanded);
    mainMenu.classList.toggle('max-h-0');
    mainMenu.classList.toggle('max-h-[20em]');
    mainMenuOverlay.classList.toggle('opacity-0');
    mainMenuOverlay.classList.toggle('opacity-50');


    // Toggle burger/X icon
    const [burgerIcon, xIcon] = mainMenuButton.querySelectorAll('svg');
    burgerIcon.classList.toggle('hidden');
    xIcon.classList.toggle('hidden');
    document.body.classList.toggle("stop-scrolling");
  });

  //Navigation

  function isDesktopWidth() {
    return window.innerWidth >= 1024;
  }
  function adjustToDekstopNav() {
    document.getElementById('main').style.marginTop = document.getElementById('navigation').offsetHeight + 'px';
    document.querySelectorAll('.slide-content-inner').forEach((el) => {
      el.style.marginTop = 0;
    });
  }
  function applyMobileNav() {
    document.getElementById('main').style.marginTop = 0;

    document.querySelectorAll('.slide-content-inner').forEach((el) => {
        el.style.marginTop = (document.getElementById('navigation').offsetHeight * 0.5) + 'px';

    });
  }

  function handleScreenResize() {
    if (isDesktopWidth() ) {
      adjustToDekstopNav();
    } else {
      applyMobileNav();
    }
  }

  window.addEventListener('resize', handleScreenResize);
  handleScreenResize();


});

/**
 * @see {@link https://webpack.js.org/api/hot-module-replacement/}
 */
import.meta.webpackHot?.accept(console.error);
