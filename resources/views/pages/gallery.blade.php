{{-- resources/views/pages/gallery.blade.php --}}
@extends('layouts.app')

@section('title', 'Galeri & Dokumentasi - Takoyaki Nusantara | Booth, Event, & Momen')
@section('meta_description', 'Galeri foto & video Takoyaki Nusantara: dokumentasi festival kuliner, booth mitra, dapur sentral halal, dan momen pelanggan di 50+ outlet.')
@section('meta_keywords', 'galeri takoyaki, dokumentasi booth takoyaki, video takoyaki, event kuliner, franchise takoyaki')

@section('content')

@include('components.gallery.hero')
@include('components.gallery.carousel')
@include('components.gallery.video-showcase')
@include('components.gallery.filter-bar')
@include('components.gallery.bento')
@include('components.gallery.masonry')
@include('components.gallery.cta')
@include('components.gallery.video-modal')

@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', () => {

    /* ================= CAROUSEL ================= */
    const slides = document.querySelectorAll('.carousel-slide');
    const dots = document.querySelectorAll('.carousel-dot');
    const progressBar = document.getElementById('slide-progress-bar');
    const prevBtn = document.getElementById('slider-prev-btn');
    const nextBtn = document.getElementById('slider-next-btn');
    const wrapper = document.getElementById('carousel-wrapper');
    const statusText = document.getElementById('carousel-status-text');

    let currentIndex = 0;
    const slideDuration = 3800;
    let progressPercent = 0;
    let isPaused = false;

    function showSlide(index) {
      slides.forEach((s, i) => {
        if (i === index) {
          s.classList.remove('opacity-0', 'pointer-events-none');
          s.classList.add('opacity-100', 'z-10');
        } else {
          s.classList.add('opacity-0', 'pointer-events-none');
          s.classList.remove('opacity-100', 'z-10');
        }
      });
      dots.forEach((d, i) => {
        if (i === index) {
          d.classList.add('w-8', 'bg-primary');
          d.classList.remove('w-2', 'bg-white/50');
        } else {
          d.classList.remove('w-8', 'bg-primary');
          d.classList.add('w-2', 'bg-white/50');
        }
      });
      currentIndex = index;
      progressPercent = 0;
      if (progressBar) progressBar.style.width = '0%';
    }

    function nextSlide() { showSlide((currentIndex + 1) % slides.length); }
    function prevSlide() { showSlide((currentIndex - 1 + slides.length) % slides.length); }

    if (nextBtn) nextBtn.addEventListener('click', nextSlide);
    if (prevBtn) prevBtn.addEventListener('click', prevSlide);

    dots.forEach(dot => dot.addEventListener('click', () => {
      showSlide(parseInt(dot.getAttribute('data-goto'), 10));
    }));

    if (wrapper) {
      wrapper.addEventListener('mouseenter', () => {
        isPaused = true;
        if (statusText) statusText.textContent = 'Jeda (Kursor Aktif)';
      });
      wrapper.addEventListener('mouseleave', () => {
        isPaused = false;
        if (statusText) statusText.textContent = 'Auto-Slide Aktif (3.8s)';
      });
    }

    setInterval(() => {
      if (!isPaused) {
        progressPercent += (50 / slideDuration) * 100;
        if (progressBar) progressBar.style.width = Math.min(progressPercent, 100) + '%';
        if (progressPercent >= 100) nextSlide();
      }
    }, 50);

    /* ================= VIDEO MODAL ================= */
    const videoTrigger = document.getElementById('main-video-trigger');
    const videoModal = document.getElementById('video-modal');
    const closeVideoBtn = document.getElementById('close-video-modal');

    if (videoTrigger && videoModal) {
      videoTrigger.addEventListener('click', () => {
        videoModal.classList.remove('hidden');
        videoModal.classList.add('flex');
      });
    }
    if (closeVideoBtn && videoModal) {
      closeVideoBtn.addEventListener('click', () => {
        videoModal.classList.add('hidden');
        videoModal.classList.remove('flex');
      });
      videoModal.addEventListener('click', e => {
        if (e.target === videoModal) {
          videoModal.classList.add('hidden');
          videoModal.classList.remove('flex');
        }
      });
    }

    /* ================= FILTER CHIPS ================= */
    const filterButtons = document.querySelectorAll('#filter-container button');
    const cards = document.querySelectorAll('.gallery-card');

    filterButtons.forEach(btn => {
      btn.addEventListener('click', () => {
        const filter = btn.getAttribute('data-filter');
        filterButtons.forEach(b => {
          b.className = 'px-5 py-2 rounded-full font-semibold text-[12px] bg-surface-container text-on-surface-variant hover:bg-surface-container-high transition-all whitespace-nowrap flex items-center gap-1.5';
        });
        btn.className = 'px-5 py-2 rounded-full font-semibold text-[12px] bg-primary text-on-primary whitespace-nowrap shadow-sm transition-all flex items-center gap-1.5';
        cards.forEach(card => {
          card.style.display = (filter === 'all' || card.getAttribute('data-cat') === filter) ? 'flex' : 'none';
        });
      });
    });
  });
</script>
@endpush