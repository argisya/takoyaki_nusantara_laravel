{{-- resources/views/partials/scripts.blade.php --}}

{{-- Micro-interaction global (mobile menu, dsb) --}}
<script>
  // Mobile menu toggle
  const btnMobile = document.getElementById('btn-mobile-menu');
  const mobileMenu = document.getElementById('mobile-menu');
  if (btnMobile && mobileMenu) {
    btnMobile.addEventListener('click', () => mobileMenu.classList.toggle('hidden'));
  }

  // Smooth scroll untuk anchor internal
  document.querySelectorAll('a[href^="#"]').forEach(a => {
    a.addEventListener('click', e => {
      const id = a.getAttribute('href');
      if (id.length > 1) {
        const el = document.querySelector(id);
        if (el) {
          e.preventDefault();
          el.scrollIntoView({ behavior: 'smooth', block: 'start' });
          mobileMenu?.classList.add('hidden');
        }
      }
    });
  });
</script>

{{-- Stack untuk JS halaman spesifik --}}
@stack('scripts')