{{-- resources/views/partials/navbar.blade.php --}}
@php
    $waLink = 'https://wa.me/'.config('site.whatsapp').'?text='.urlencode(config('site.whatsapp_text'));
    $navItems = [
        ['label' => 'Beranda',        'route' => 'home',        'anchor' => null],
        ['label' => 'Menu & Varian',  'route' => 'menu',        'anchor' => null],
        ['label' => 'Keunggulan',     'route' => 'home',        'anchor' => 'keunggulan'],
        ['label' => 'Lokasi Outlet',  'route' => 'home',        'anchor' => 'outlet'],
        ['label' => 'Tentang Kami',   'route' => 'about',       'anchor' => null],
        ['label' => 'Franchise',      'route' => 'partnership', 'anchor' => null],
    ];
@endphp

<div class="fixed top-0 left-0 right-0 z-50 flex flex-col">

    {{-- Topbar Promo --}}
    <div class="w-full bg-secondary-container text-on-secondary-container px-gutter py-1.5 flex items-center justify-center gap-2">
        <span class="material-symbols-outlined text-[16px]">campaign</span>
        <p class="font-label-sm text-label-sm text-center tracking-wide">
            🎉 Promo Spesial: Gratis Ongkir &amp; Diskon 20% Pembelian Pertama!
        </p>
    </div>

    {{-- Navbar --}}
    <header class="w-full bg-surface/90 backdrop-blur-xl shadow-[0_1px_8px_rgba(0,0,0,0.04)]">
        <div class="h-16 md:h-20 w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop flex items-center justify-between gap-3">

            {{-- Logo --}}
            <a href="{{ route('home') }}" class="flex items-center gap-2 shrink-0">
                <img alt="Logo Takoyaki Nusantara" class="h-9 w-9 object-contain" 
                     src="{{ asset('images/logo.png') }}">
                <div class="flex flex-col leading-tight">
                    <span class="font-headline-sm text-[16px] md:text-headline-sm text-primary tracking-tight">
                        {{ config('site.name') }}
                    </span>
                    <span class="hidden sm:block font-label-sm text-[10px] text-on-surface-variant uppercase tracking-wider">
                        {{ config('site.tagline') }}
                    </span>
                </div>
            </a>

            {{-- Desktop Nav --}}
            <nav class="hidden xl:flex items-center gap-1">
                @foreach($navItems as $item)
                    @php
                        $isActive = $item['route'] && request()->routeIs($item['route']) && !$item['anchor'];
                        $href = $item['route']
                            ? route($item['route']) . ($item['anchor'] ? '#'.$item['anchor'] : '')
                            : '#';
                    @endphp
                    <a href="{{ $href }}"
                       class="px-3 py-2 font-label-md text-label-md rounded-lg transition-colors
                              {{ $isActive 
                                 ? 'bg-primary-container text-on-primary-container font-semibold' 
                                 : 'text-on-surface-variant hover:text-on-surface hover:bg-surface-container' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach
            </nav>

            {{-- CTA WA + Hamburger --}}
            <div class="flex items-center gap-2 shrink-0">
                <a href="{{ $waLink }}" target="_blank" rel="noopener"
                   class="hidden md:inline-flex items-center gap-2 bg-primary hover:bg-primary-container text-on-primary px-4 py-2 rounded-xl font-label-md text-label-md shadow-sm transition-all">
                    <span class="material-symbols-outlined text-[18px]">chat</span>
                    <span>Pesan Sekarang</span>
                </a>

                <button id="btn-mobile-menu" aria-label="Buka menu"
                        class="xl:hidden w-10 h-10 rounded-xl bg-surface-container flex items-center justify-center">
                    <span class="material-symbols-outlined">menu</span>
                </button>
            </div>
        </div>

        {{-- Mobile Menu --}}
        <div id="mobile-menu" class="hidden xl:hidden border-t border-outline-variant/30 bg-surface">
            <nav class="max-w-[1280px] mx-auto px-margin py-3 flex flex-col gap-1">
                @foreach($navItems as $item)
                    @php
                        $isActive = $item['route'] && request()->routeIs($item['route']) && !$item['anchor'];
                        $href = $item['route']
                            ? route($item['route']) . ($item['anchor'] ? '#'.$item['anchor'] : '')
                            : '#';
                    @endphp
                    <a href="{{ $href }}"
                       class="px-4 py-3 font-label-lg text-label-lg rounded-lg
                              {{ $isActive 
                                 ? 'bg-primary-container text-on-primary-container font-semibold' 
                                 : 'text-on-surface-variant hover:bg-surface-container' }}">
                        {{ $item['label'] }}
                    </a>
                @endforeach

                <a href="{{ $waLink }}" target="_blank" rel="noopener"
                   class="mt-2 inline-flex items-center justify-center gap-2 bg-primary text-on-primary px-4 py-3 rounded-xl font-label-lg font-semibold">
                    <span class="material-symbols-outlined text-[20px]">chat</span>
                    Pesan via WhatsApp
                </a>
            </nav>
        </div>
    </header>
</div>