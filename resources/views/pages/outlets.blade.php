{{-- resources/views/pages/outlets.blade.php --}}
@extends('layouts.app')

@section('title', 'Lokasi Outlet - Takoyaki Nusantara | 50+ Cabang di 12 Kota')
@section('meta_description', 'Temukan outlet Takoyaki Nusantara terdekat: Jakarta, Bandung, Yogyakarta, Surabaya, Bali. Pesan via WhatsApp outlet langsung atau GoFood/ShopeeFood.')
@section('meta_keywords', 'lokasi takoyaki, outlet takoyaki, cabang takoyaki, alamat takoyaki, takoyaki terdekat')

@section('content')

@include('components.outlets.hero')
@include('components.outlets.filter-bar')
@include('components.outlets.map')
@include('components.outlets.cards')
@include('components.outlets.party')
@include('components.outlets.faq')

@endsection

@push('scripts')
<script>
  (function initOutletFiltering() {
    const searchInput = document.getElementById('outlet-search-input');
    const clearBtn = document.getElementById('clear-search-btn');
    const cityButtons = document.querySelectorAll('.city-btn');
    const openToggle = document.getElementById('open-only-toggle');
    const outletCards = document.querySelectorAll('.outlet-card');
    const noResults = document.getElementById('no-results-state');
    const badgeCount = document.getElementById('outlet-count-badge');
    const resetBtn = document.getElementById('reset-filters-btn');

    if (!searchInput || !outletCards.length) return;

    let currentCity = 'all';

    function filterOutlets() {
      const query = searchInput.value.toLowerCase().trim();
      const isOpenOnly = openToggle.checked;
      let visibleCount = 0;

      outletCards.forEach(card => {
        const cardCity = card.getAttribute('data-city') || '';
        const cardOpen = card.getAttribute('data-open') === 'true';
        const cardText = card.textContent.toLowerCase();

        const matchesCity = (currentCity === 'all') || (cardCity === currentCity);
        const matchesQuery = query === '' || cardText.includes(query);
        const matchesOpen = !isOpenOnly || cardOpen;

        if (matchesCity && matchesQuery && matchesOpen) {
          card.classList.remove('hidden');
          card.classList.add('flex');
          visibleCount++;
        } else {
          card.classList.add('hidden');
          card.classList.remove('flex');
        }
      });

      if (clearBtn) clearBtn.classList.toggle('hidden', query === '');

      if (visibleCount === 0) {
        noResults.classList.remove('hidden');
        noResults.classList.add('flex');
        if (badgeCount) badgeCount.textContent = 'Tidak ada hasil';
      } else {
        noResults.classList.add('hidden');
        noResults.classList.remove('flex');
        if (badgeCount) badgeCount.textContent = `Menampilkan ${visibleCount} Outlet`;
      }
    }

    cityButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        cityButtons.forEach(b => {
          b.classList.remove('bg-primary', 'text-on-primary');
          b.classList.add('bg-surface-container', 'text-on-surface-variant');
        });
        btn.classList.add('bg-primary', 'text-on-primary');
        btn.classList.remove('bg-surface-container', 'text-on-surface-variant');
        currentCity = btn.getAttribute('data-city');
        filterOutlets();
      });
    });

    searchInput.addEventListener('input', filterOutlets);
    openToggle?.addEventListener('change', filterOutlets);
    clearBtn?.addEventListener('click', () => { searchInput.value = ''; filterOutlets(); searchInput.focus(); });
    resetBtn?.addEventListener('click', () => {
      searchInput.value = '';
      if (openToggle) openToggle.checked = false;
      currentCity = 'all';
      cityButtons.forEach((b, idx) => {
        if (idx === 0) {
          b.classList.add('bg-primary', 'text-on-primary');
          b.classList.remove('bg-surface-container', 'text-on-surface-variant');
        } else {
          b.classList.remove('bg-primary', 'text-on-primary');
          b.classList.add('bg-surface-container', 'text-on-surface-variant');
        }
      });
      filterOutlets();
    });
  })();
</script>
@endpush