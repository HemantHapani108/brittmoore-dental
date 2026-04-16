/**
 * Brittmoore Dental - Main JavaScript
 */
(function() {
  'use strict';

  // ── Mobile Menu Toggle ──
  var menuToggle = document.querySelector('.menu-toggle');
  var mainNav    = document.querySelector('.main-nav');
  if (menuToggle && mainNav) {
    menuToggle.addEventListener('click', function() {
      var isOpen = mainNav.classList.toggle('open');
      menuToggle.setAttribute('aria-expanded', isOpen);
    });
    // Close on outside click
    document.addEventListener('click', function(e) {
      if (!e.target.closest('.site-header')) {
        mainNav.classList.remove('open');
        menuToggle.setAttribute('aria-expanded', 'false');
      }
    });
  }

  // ── Submenu on mobile (tap to toggle) ──
  if (window.innerWidth <= 768) {
    document.querySelectorAll('.main-nav .menu-item-has-children > a').forEach(function(link) {
      link.addEventListener('click', function(e) {
        e.preventDefault();
        var sub = this.nextElementSibling;
        if (sub) {
          sub.style.display = sub.style.display === 'block' ? 'none' : 'block';
        }
      });
    });
  }

  // ── Hero Slider ──
  var slides = document.querySelectorAll('.hero-slide');
  var dots   = document.querySelectorAll('.slide-dot');
  var current = 0;
  if (slides.length > 1) {
    function showSlide(n) {
      slides.forEach(function(s) { s.classList.remove('active'); });
      dots.forEach(function(d) { d.classList.remove('active'); });
      current = (n + slides.length) % slides.length;
      slides[current].classList.add('active');
      if (dots[current]) dots[current].classList.add('active');
    }
    dots.forEach(function(dot, i) {
      dot.addEventListener('click', function() { showSlide(i); });
    });
    setInterval(function() { showSlide(current + 1); }, 5000);
  }

  // ── FAQ Accordion ──
  document.querySelectorAll('.faq-question').forEach(function(btn) {
    btn.addEventListener('click', function() {
      var answer  = this.nextElementSibling;
      var isOpen  = this.classList.contains('active');
      // Close all
      document.querySelectorAll('.faq-question').forEach(function(q) {
        q.classList.remove('active');
        var a = q.nextElementSibling;
        if (a) a.classList.remove('open');
      });
      // Open clicked (if not already open)
      if (!isOpen) {
        this.classList.add('active');
        if (answer) answer.classList.add('open');
      }
    });
  });

  // ── Smooth scroll for anchor links ──
  document.querySelectorAll('a[href^="#"]').forEach(function(a) {
    a.addEventListener('click', function(e) {
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        e.preventDefault();
        target.scrollIntoView({ behavior: 'smooth', block: 'start' });
      }
    });
  });

  // ── Sticky header shadow on scroll ──
  var header = document.querySelector('.site-header');
  if (header) {
    window.addEventListener('scroll', function() {
      if (window.scrollY > 50) {
        header.style.boxShadow = '0 4px 20px rgba(0,0,0,0.2)';
      } else {
        header.style.boxShadow = '0 2px 8px rgba(0,0,0,0.12)';
      }
    });
  }

  // ── Contact form validation ──
  var form = document.querySelector('.contact-form form');
  if (form) {
    form.addEventListener('submit', function(e) {
      var valid = true;
      var required = form.querySelectorAll('[required]');
      required.forEach(function(field) {
        field.style.borderColor = '';
        if (!field.value.trim()) {
          field.style.borderColor = '#ff0000';
          valid = false;
        }
      });
      var emailField = form.querySelector('[type="email"]');
      if (emailField && emailField.value && !/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(emailField.value)) {
        emailField.style.borderColor = '#ff0000';
        valid = false;
      }
      if (!valid) { e.preventDefault(); }
    });
  }

  // ── Back to top button ──
  var backTop = document.querySelector('.back-to-top');
  if (backTop) {
    window.addEventListener('scroll', function() {
      backTop.style.display = window.scrollY > 400 ? 'flex' : 'none';
    });
    backTop.addEventListener('click', function() {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  // ── Animate elements on scroll (simple intersection observer) ──
  if ('IntersectionObserver' in window) {
    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('animated');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15 });
    document.querySelectorAll('.service-card, .testimonial-card, .blog-card, .feature-item').forEach(function(el) {
      el.classList.add('animate-on-scroll');
      observer.observe(el);
    });
  }

})();
