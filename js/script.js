document.addEventListener('DOMContentLoaded', () => {
  const sidebar = document.querySelector('.sidebar');
  const sidebarToggler = document.querySelector('.sidebar-toggler');
  const menuToggler = document.querySelector('.menu-toggler');
  const overlay = document.getElementById('sidebarOverlay');
  const mainContent = document.querySelector('.main-content');

  /* MOBILE PARALLAX */
  (function setupParallax() {
    if (window.innerWidth > 768) return;
    let ticking = false;
    window.addEventListener(
      'scroll',
      () => {
        if (!ticking) {
          requestAnimationFrame(() => {
            const scrollY = window.scrollY;
            mainContent.style.backgroundPositionY = `calc(50% + ${scrollY * 0.3}px)`;
            ticking = false;
          });
          ticking = true;
        }
      },
      { passive: true },
    );
  })();

  /* HELPERS */
  const isMobile = () => window.innerWidth <= 1024;

  function closeMenu() {
    sidebar.classList.remove('menu-active');
    sidebar.style.height = '';
    if (menuToggler) {
      menuToggler.querySelector('span').innerText = 'menu';
      menuToggler.setAttribute('aria-expanded', 'false');
    }
    if (overlay) {
      overlay.classList.remove('active');
    }
  }

  function openMenu() {
    sidebar.classList.add('menu-active');
    sidebar.style.height = sidebar.scrollHeight + 'px';
    if (menuToggler) {
      menuToggler.querySelector('span').innerText = 'close';
      menuToggler.setAttribute('aria-expanded', 'true');
    }
    if (overlay) {
      overlay.classList.add('active');
    }
  }

  /* DESKTOP SIDEBAR TOGGLE */
  if (sidebarToggler) {
    sidebarToggler.addEventListener('click', () => {
      sidebar.classList.toggle('collapsed');
      document.body.classList.toggle('sidebar-collapsed');
    });
  }

  /* MOBILE HAMBURGER TOGGLE */
  if (menuToggler) {
    menuToggler.addEventListener('click', () => {
      if (sidebar.classList.contains('menu-active')) {
        closeMenu();
      } else {
        openMenu();
      }
    });
  }

  if (overlay) {
    overlay.addEventListener('click', closeMenu);
  }

  sidebar.querySelectorAll('.nav-link').forEach((link) => {
    link.addEventListener('click', () => {
      if (isMobile() && sidebar.classList.contains('menu-active')) {
        closeMenu();
      }
    });
  });

  window.addEventListener('resize', () => {
    if (!isMobile()) {
      sidebar.style.height = '';
      sidebar.classList.remove('menu-active');
      if (overlay) overlay.classList.remove('active');
      if (menuToggler) {
        menuToggler.querySelector('span').innerText = 'menu';
        menuToggler.setAttribute('aria-expanded', 'false');
      }
    }
  });
});
