(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Easy on scroll event listener 
   */
  const onscroll = (el, listener) => {
    el.addEventListener('scroll', listener)
  }

  /**
   * Navbar links active state on scroll
   */
  let navbarlinks = select('#navbar .scrollto', true)
  const navbarlinksActive = () => {
    let position = window.scrollY + 200
    navbarlinks.forEach(navbarlink => {
      if (!navbarlink.hash) return
      let section = select(navbarlink.hash)
      if (!section) return
      if (position >= section.offsetTop && position <= (section.offsetTop + section.offsetHeight)) {
        navbarlink.classList.add('active')
      } else {
        navbarlink.classList.remove('active')
      }
    })
  }
  window.addEventListener('load', navbarlinksActive)
  onscroll(document, navbarlinksActive)

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select('#header')
    let offset = header.offsetHeight

    let elementPos = select(el).offsetTop
    window.scrollTo({
      top: elementPos - offset,
      behavior: 'smooth'
    })
  }

  /**
   * Toggle .header-scrolled class to #header when page is scrolled
   */
  let selectHeader = select('#header')
  if (selectHeader) {
    const headerScrolled = () => {
      if (window.scrollY > 100) {
        selectHeader.classList.add('header-scrolled')
      } else {
        selectHeader.classList.remove('header-scrolled')
      }
    }
    window.addEventListener('load', headerScrolled)
    onscroll(document, headerScrolled)
  }

  /**
   * Back to top button
   */
  let backtotop = select('.back-to-top')
  if (backtotop) {
    const toggleBacktotop = () => {
      if (window.scrollY > 100) {
        backtotop.classList.add('active')
      } else {
        backtotop.classList.remove('active')
      }
    }
    window.addEventListener('load', toggleBacktotop)
    onscroll(document, toggleBacktotop)
  }

  /**
   * Mobile nav toggle
   */
  on('click', '.mobile-nav-toggle', function(e) {
    select('#navbar').classList.toggle('navbar-mobile')
    this.classList.toggle('bi-list')
    this.classList.toggle('bi-x')
  })

  /**
   * Mobile nav dropdowns activate
   */
  on('click', '.navbar .dropdown > a', function(e) {
    if (select('#navbar').classList.contains('navbar-mobile')) {
      e.preventDefault()
      this.nextElementSibling.classList.toggle('dropdown-active')
    }
  }, true)

  /**
   * Scrool with ofset on links with a class name .scrollto
   */
  on('click', '.scrollto', function(e) {
    if (select(this.hash)) {
      e.preventDefault()

      let navbar = select('#navbar')
      if (navbar.classList.contains('navbar-mobile')) {
        navbar.classList.remove('navbar-mobile')
        let navbarToggle = select('.mobile-nav-toggle')
        navbarToggle.classList.toggle('bi-list')
        navbarToggle.classList.toggle('bi-x')
      }
      scrollto(this.hash)
    }
  }, true)

  /**
   * Scroll with ofset on page load with hash links in the url
   */
  window.addEventListener('load', () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash)
      }
    }
  });

  /**
   * Preloader
   */
  let preloader = select('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove()
    });
  }

  /**
   * Initiate  glightbox 
   */
  const glightbox = GLightbox({
    selector: '.glightbox'
  });

})()




// const swiper = new Swiper(".mySwiper", {
//   slidesPerView: 1,
//   spaceBetween: 10,
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
// });

// document.querySelectorAll('.next-btn').forEach((btn) => {
//   btn.addEventListener('click', () => {
//     swiper.slideNext();
//   });
// });



// Start World i Go section



  gsap.registerPlugin(ScrollTrigger);

  // HERO REVEAL
  gsap.from(".worldigo-hero h1", {
    y: 80,
    opacity: 0,
    duration: 1,
    ease: "power3.out",
    scrollTrigger: {
      trigger: ".worldigo-hero",
      start: "top 80%",
    }
  });

  gsap.from(".worldigo-hero p", {
    y: 40,
    opacity: 0,
    duration: 1,
    delay: 0.2,
    scrollTrigger: {
      trigger: ".worldigo-hero",
      start: "top 80%",
    }
  });

  gsap.from(".worldigo-btn", {
    scale: 0.8,
    opacity: 0,
    duration: 0.6,
    delay: 0.4,
    scrollTrigger: {
      trigger: ".worldigo-hero",
      start: "top 80%",
    }
  });

  // ABOUT GRID (LEFT & RIGHT SLIDE)
  gsap.from(".worldigo-text:nth-child(1)", {
    x: -100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
      trigger: ".worldigo-grid",
      start: "top 75%",
    }
  });

  gsap.from(".worldigo-text:nth-child(2)", {
    x: 100,
    opacity: 0,
    duration: 1,
    scrollTrigger: {
      trigger: ".worldigo-grid",
      start: "top 75%",
    }
  });

  // FEATURE CARDS STAGGER
 gsap.to(".feature-card", {
   y: "+=10",
   duration: 2,
   repeat: -1,
   yoyo: true,
   ease: "sine.inOut",
   stagger: {
     each: 0.2,
     from: "random"
   }
 });

  // 🔥 PARALLAX BACKGROUND (SCRUB)
  gsap.to(".worldigo-section::before", {
    y: 100,
    ease: "none",
    scrollTrigger: {
      trigger: ".worldigo-section",
      start: "top bottom",
      end: "bottom top",
      scrub: true
    }
  });

  // ALTERNATIVE PARALLAX (Better support - use container)
  gsap.to(".worldigo-container", {
    y: -50,
    ease: "none",
    scrollTrigger: {
      trigger: ".worldigo-section",
      start: "top bottom",
      end: "bottom top",
      scrub: true
    }
  });




  // End World i Go section







  // Start Game on

  // End Game on