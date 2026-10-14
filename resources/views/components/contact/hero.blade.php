<section class="w-full bg-surface-container-low py-3 border-b-0">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop flex flex-col sm:flex-row sm:items-center justify-between gap-2">
        <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-[12px] text-on-surface-variant">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors flex items-center gap-1">
                <span class="material-symbols-outlined text-[16px]">home</span> Beranda
            </a>
            <span class="text-outline-variant">/</span>
            <span class="text-primary font-bold">Kontak & Hubungi Kami</span>
        </nav>
        <div class="flex items-center gap-2 text-tertiary text-[11px] bg-tertiary/10 px-3 py-1 rounded-full w-fit">
            <span class="w-2 h-2 rounded-full bg-tertiary animate-pulse"></span>
            <span class="font-semibold">CS Online — Respon Cepat < 15 Menit (08.00-21.00 WIB)</span>
        </div>
    </div>
</section>

<section class="relative w-full overflow-hidden bg-gradient-to-b from-surface-container-low via-surface to-surface pt-8 pb-16">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

            <div class="lg:col-span-7 flex flex-col gap-4">
                <span class="inline-flex items-center gap-2 px-3 py-1 bg-surface-container-high rounded-full w-fit">
                    <span class="material-symbols-outlined text-primary text-[18px]">support_agent</span>
                    <span class="text-[11px] uppercase tracking-wider text-primary font-bold">Layanan Komunikasi & Kemitraan Resmi</span>
                </span>

                <h1 class="text-[34px] md:text-[48px] font-bold text-on-surface tracking-tight leading-tight">
                    Hubungi Tim <span class="text-primary">Takoyaki Nusantara</span>
                </h1>

                <p class="text-[15px] md:text-[17px] text-on-surface-variant max-w-2xl leading-relaxed">
                    Punya pertanyaan seputar menu, kerjasama kemitraan franchise, pesanan katering & live cooking event, atau kritik dan saran? Tim kami siap melayani Anda dengan sepenuh kehangatan khas Nusantara.
                </p>

                <div class="flex flex-wrap items-center gap-3 pt-2">
                    @php
                        $chips = [
                            ['icon'=>'bolt',        'title'=>'Rata-rata Respon', 'value'=>'< 15 Menit via WA', 'color'=>'primary'],
                            ['icon'=>'verified',    'title'=>'Status Sertifikasi','value'=>'100% Halal Indonesia','color'=>'secondary'],
                            ['icon'=>'storefront',  'title'=>'Cakupan Wilayah',  'value'=>'50+ Outlet Aktif',   'color'=>'tertiary'],
                        ];
                    @endphp
                    @foreach($chips as $c)
                        <div class="flex items-center gap-2 bg-surface-container-lowest px-4 py-2 rounded-xl shadow-sm">
                            <span class="material-symbols-outlined text-{{ $c['color'] }} text-[20px]">{{ $c['icon'] }}</span>
                            <div class="leading-tight">
                                <p class="text-[10.5px] text-on-surface-variant">{{ $c['title'] }}</p>
                                <p class="text-[12.5px] text-on-surface font-bold">{{ $c['value'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="lg:col-span-5 relative">
                <div class="relative rounded-2xl overflow-hidden shadow-xl bg-surface-container aspect-[4/3] group">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                         alt="Staff Takoyaki Nusantara"
                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuDXt4bL3P5TB2S6nVKrrEz6Y7fJpQdwpK15vuUcliMT2EOJsIIwwzTLB1agedORHQC0GaSWPn5iFQR2rMotHkWVuXd74MXdnXKY8ysu5R9epQEQvurAIW7LMMShvl0yy5rDo7gORx9xpQY4SQ9pVnnOMUkyN3iJwFfMDHTJhGIIHuX_5o26FqFS2T_nUGVoZV2UZVVGTUx0tOKMGpJJUpuONAtXsWffUFMg4qMnc3UUgX-CwfvvK3Pf">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-transparent flex flex-col justify-end p-4 text-white">
                        <div class="flex items-center gap-2 mb-1">
                            <span class="px-2 py-0.5 rounded-full bg-secondary-container text-on-secondary-container text-[10.5px] font-bold">Live Stall</span>
                            <span class="text-white/80 text-[10.5px]">Kedai & Event</span>
                        </div>
                        <p class="text-[16px] font-bold">Dari Dapur Autentik Langsung ke Acara Anda</p>
                        <p class="text-[12px] text-white/80 line-clamp-2">Layanan live cooking party booth untuk gathering, pernikahan, dan perayaan spesial.</p>
                    </div>
                </div>

                <div class="absolute -bottom-4 -left-4 bg-primary text-on-primary px-4 py-3 rounded-xl shadow-lg flex items-center gap-3 hidden sm:flex">
                    <span class="material-symbols-outlined text-[24px]">workspace_premium</span>
                    <div class="leading-tight">
                        <p class="text-[11px] text-white/80">Garansi Kualitas</p>
                        <p class="text-[14px] font-bold">Bahan Baku Higienis</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>