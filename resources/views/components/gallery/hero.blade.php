<section class="w-full relative overflow-hidden bg-gradient-to-b from-surface-container-low via-surface-container-low/70 to-surface py-10 md:py-14 border-b border-outline-variant/30">
    <div class="absolute -top-32 -left-20 w-96 h-96 bg-primary/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/3 -right-20 w-[420px] h-[420px] bg-secondary-container/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10 flex flex-col gap-6">

        {{-- Breadcrumb --}}
        <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-[12px] text-on-surface-variant">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors flex items-center gap-1">
                <span class="material-symbols-outlined text-[16px]">home</span>
                <span>Beranda</span>
            </a>
            <span class="text-outline">/</span>
            <span class="text-primary font-bold">Galeri & Dokumentasi</span>
        </nav>

        <div class="flex flex-col max-w-4xl gap-4">
            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full bg-white/90 border border-primary/20 text-primary text-[11px] font-bold shadow-sm w-fit backdrop-blur-md">
                <span class="relative flex h-2.5 w-2.5">
                    <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2.5 w-2.5 bg-primary"></span>
                </span>
                <span class="tracking-wider uppercase">Live Showcase & Dokumentasi Resmi 2025</span>
            </span>
            <h1 class="text-[32px] sm:text-[40px] lg:text-[56px] font-bold text-on-surface tracking-tight leading-[1.1]">
                Potret Kelezatan, Cerita Gerai, & Jejak Langkah Kuliner Kami
            </h1>
            <p class="text-[15px] lg:text-[18px] text-on-surface-variant leading-relaxed">
                Eksplorasi dokumentasi autentik Takoyaki Nusantara — mulai dari video aksi dapur bersuhu tinggi, carousel sorotan, higienitas dapur sentral bersertifikasi halal MUI, hingga keceriaan ribuan mitra dan pelanggan di seluruh Indonesia.
            </p>
        </div>

        {{-- Stats --}}
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-4 pt-2">
            @php
                $stats = [
                    ['icon'=>'movie',       'value'=>'40+',  'label'=>'Video & Klip Reels',       'color'=>'primary'],
                    ['icon'=>'storefront',  'value'=>'75+',  'label'=>'Booth & Gerai Aktif',      'color'=>'primary'],
                    ['icon'=>'festival',    'value'=>'25+',  'label'=>'Event Kuliner Akbar',      'color'=>'primary'],
                    ['icon'=>'verified',    'value'=>'100%', 'label'=>'Autentik & Halal MUI',     'color'=>'tertiary'],
                ];
            @endphp
            @foreach($stats as $s)
                <div class="bg-white/80 backdrop-blur-md border border-outline-variant/40 p-4 md:p-5 rounded-2xl flex items-center gap-3 transition-all duration-300 hover:-translate-y-1 group shadow-sm">
                    <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-{{ $s['color'] }}/15 to-{{ $s['color'] }}/5 text-{{ $s['color'] }} flex items-center justify-center shrink-0 border border-{{ $s['color'] }}/20 group-hover:scale-110 transition-transform">
                        <span class="material-symbols-outlined text-[24px]">{{ $s['icon'] }}</span>
                    </div>
                    <div class="flex flex-col leading-tight">
                        <span class="text-[22px] md:text-[28px] text-on-surface font-extrabold leading-none">{{ $s['value'] }}</span>
                        <span class="text-[11.5px] text-on-surface-variant mt-1 font-medium">{{ $s['label'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>