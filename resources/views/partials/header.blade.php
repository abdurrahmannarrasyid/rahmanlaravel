<header class="site-header" role="banner">
  <div class="topbar">
    <div class="container">
      {{-- Logo / Brand --}}
      <a class="brand" href="{{ route('home') }}" aria-label="Inaklug Home">
        <img src="{{ asset('images/inaklug.png') }}" alt="Logo" onerror="this.style.display='none'">
        <span>Inaklug</span>
      </a>

      {{-- NAV --}}
      <nav id="mainNav" class="nav" role="navigation">
        <ul>
          <li><a href="{{ route('home') }}"     class="{{ request()->routeIs('home')     ? 'active' : '' }}">Home</a></li>
          <li><a href="{{ route('about') }}"    class="{{ request()->routeIs('about')    ? 'active' : '' }}">Tentang Kami</a></li>
          <li><a href="{{ route('services') }}" class="{{ request()->routeIs('services') ? 'active' : '' }}">Layanan Kami</a></li>
          <li><a href="{{ route('articles') }}" class="{{ request()->routeIs('articles') ? 'active' : '' }}">Artikel</a></li>
          <li><a href="{{ route('contact') }}"  class="{{ request()->routeIs('contact')  ? 'active' : '' }}">Hubungi Kami</a></li>
        </ul>
      </nav>

      {{-- Search --}}
      <form class="search" action="{{ route('search') }}" method="get" role="search">
        <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true">
          <path fill="currentColor"
            d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0016 9.5 6.5 6.5 0 109.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zM10 14a4 4 0 110-8 4 4 0 010 8z">
          </path>
        </svg>
        <input type="text" name="q" placeholder="Ketik pencarian" value="{{ request('q') }}">
      </form>

      {{-- CTA --}}
      <a href="#" class="cta">DAFTAR ON-LINE</a>

      {{-- HAMBURGER (mobile) --}}
      <button class="menu-toggle" id="menuToggle" aria-label="Toggle navigation">
        <span></span><span></span><span></span>
      </button>
    </div>
  </div>
</header>

{{-- Script kecil untuk toggle --}}
<script>
  const menuToggle = document.getElementById('menuToggle');
  const nav = document.getElementById('mainNav');

  if (menuToggle && nav) {
    menuToggle.setAttribute('aria-expanded', 'false');
    menuToggle.addEventListener('click', () => {
      const isOpen = nav.classList.toggle('open');
      menuToggle.classList.toggle('active', isOpen);
      menuToggle.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
    });
  }
</script>

