<section class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop pt-4 pb-3">
    <div class="flex flex-wrap items-center justify-between gap-2">
        <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-[13px] text-on-surface-variant">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors">Beranda</a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-primary font-bold">Menu & Varian Produk</span>
        </nav>
        <span class="inline-flex items-center gap-2 bg-surface-container-high px-3 py-1 rounded-full">
            <span class="material-symbols-outlined text-secondary text-[15px]">local_fire_department</span>
            <span class="text-[10px] uppercase tracking-wider font-bold">Satu Resep Juara • Dipanggang Dadakan</span>
        </span>
    </div>
</section>

<section class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-4 mb-8">
    <div class="bg-surface-container-low rounded-3xl p-6 md:p-10 overflow-hidden relative shadow-sm">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center relative z-10">

            <div class="lg:col-span-7 flex flex-col gap-5">
                <span class="inline-flex items-center gap-2 bg-primary/10 text-primary px-3 py-1 rounded-full w-fit">
                    <span class="material-symbols-outlined text-[15px]">restaurant</span>
                    <span class="text-[10px] font-bold tracking-wider uppercase">Authentic Osaka × Rempah Nusantara</span>
                </span>

                <h1 class="font-bold text-[30px] leading-tight sm:text-[36px] lg:text-[44px] tracking-tight">
                    Satu Resep Juara, <span class="text-primary">Beragam Pilihan Paket</span> Sesuai Porsimu
                </h1>

                <p class="text-[15px] lg:text-[16px] text-on-surface-variant max-w-xl leading-relaxed">
                    Kami hanya menyajikan satu formulasi terbaik: takoyaki otentik dengan gurita kenyal segar, adonan renyah gurih berpadu rempah Nusantara, <em class="not-italic text-primary font-bold">fresh dadakan</em> saat pesanan masuk.
                </p>

                <div class="grid grid-cols-3 gap-2 pt-1">
                    <div class="bg-surface-container-lowest p-3 rounded-xl shadow-sm">
                        <div class="flex items-center gap-1 text-tertiary">
                            <span class="material-symbols-outlined text-[16px]">verified</span>
                            <span class="text-[10px] font-bold uppercase">100% Halal</span>
                        </div>
                        <span class="text-[11px] text-on-surface-variant">MUI & BPJPH</span>
                    </div>
                    <div class="bg-surface-container-lowest p-3 rounded-xl shadow-sm">
                        <div class="flex items-center gap-1 text-primary">
                            <span class="material-symbols-outlined text-[16px]">phishing</span>
                            <span class="text-[10px] font-bold uppercase">Gurita Asli</span>
                        </div>
                        <span class="text-[11px] text-on-surface-variant">Potongan Utuh</span>
                    </div>
                    <div class="bg-surface-container-lowest p-3 rounded-xl shadow-sm">
                        <div class="flex items-center gap-1 text-secondary">
                            <span class="material-symbols-outlined text-[16px]">skillet</span>
                            <span class="text-[10px] font-bold uppercase">Live Cooked</span>
                        </div>
                        <span class="text-[11px] text-on-surface-variant">Hangat & Garing</span>
                    </div>
                </div>

                <div class="flex flex-wrap items-center gap-3 pt-1">
                    <a href="#daftar-paket" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-container text-on-primary px-5 py-2.5 rounded-xl shadow-md transition-all text-[13.5px] font-semibold">
                        <span>Lihat 4 Pilihan Paket</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_downward</span>
                    </a>
                    <a href="#sauce-selector" class="inline-flex items-center gap-2 bg-surface-container-lowest text-on-surface hover:text-primary px-5 py-2.5 rounded-xl shadow-sm transition-colors text-[13.5px] font-semibold">
                        <span class="material-symbols-outlined text-[16px]">palette</span>
                        <span>Pilihan Saus & Topping</span>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5 relative">
                <div class="relative rounded-2xl overflow-hidden shadow-xl aspect-[4/3] group">
                    <img class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-105"
                         alt="Takoyaki Nusantara"
                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuAq6p22qwXWQ3X6M5Thr1f15lz6QLGal3CLVGdJU1-RRkVSGvTocvnPADX0kOgzMDY0vUOIfKklIcG8Ti7Gh9cwqUSKH2e7m6FB9coc51UX_blb9yS3ob8d7gZKo9WNk-44-r3G2kJ-1d7JfDsvhDo2O2ISI-WUnDk6lqb1cVoioBtAe0ie_MI3tBMvEGqWvuC1qmviNAMdMJIig3QlgQrYlNKozhpLHqIL-9p8k2QD12a8nh9xGhjC">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div>

                    <div class="absolute top-3 left-3 bg-white/95 backdrop-blur-md px-3 py-1 rounded-full shadow-md flex items-center gap-2">
                        <span class="w-2 h-2 rounded-full bg-primary animate-ping"></span>
                        <span class="text-[10px] font-bold uppercase tracking-wider">Live Sizzle Hot</span>
                    </div>

                    <div class="absolute bottom-3 left-3 right-3 bg-white/95 backdrop-blur-md p-3 rounded-xl shadow-lg flex items-center justify-between">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-secondary-container text-[22px]">grade</span>
                            <div class="leading-tight">
                                <p class="text-[12px] font-bold">Resep Tunggal Sempurna</p>
                                <p class="text-[10px] text-on-surface-variant">Kaldu dashi + rempah aromatik</p>
                            </div>
                        </div>
                        <span class="text-[15px] text-primary font-bold">Mulai 15rb</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>