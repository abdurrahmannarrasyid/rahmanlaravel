// Toggle menu mobile
document.addEventListener('DOMContentLoaded', () => {
  const navToggle = document.querySelector('.nav-toggle');
  const nav = document.getElementById('primary-nav');
  if (!navToggle || !nav) return;

  const mq = window.matchMedia('(max-width: 980px)');

  // Tidak perlu set display inline — biarkan CSS yang atur
  const closeMenu = () => {
    nav.classList.remove('open');
    navToggle.setAttribute('aria-expanded', 'false');
    document.documentElement.style.overflowY = '';
    document.body.style.overflowY = '';
  };

  // Tutup menu otomatis saat pindah ke desktop
  const onMQChange = () => {
    if (!mq.matches) closeMenu();
  };
  mq.addEventListener ? mq.addEventListener('change', onMQChange)
                      : mq.addListener(onMQChange);

  // Klik hamburger
  navToggle.addEventListener('click', () => {
    const isOpen = nav.classList.toggle('open');
    navToggle.setAttribute('aria-expanded', String(isOpen));
    document.documentElement.style.overflowY = isOpen ? 'hidden' : '';
    document.body.style.overflowY = isOpen ? 'hidden' : '';
  });

  // Klik link dalam menu → tutup (UX)
  nav.addEventListener('click', (e) => {
    const t = e.target;
    if (t && t.tagName === 'A' && mq.matches) closeMenu();
  });
});
