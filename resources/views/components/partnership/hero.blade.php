<section class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop pt-4 pb-3">
    <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-[12px] text-on-surface-variant">
        <a href="{{ route('home') }}" class="hover:text-primary transition-colors flex items-center gap-1">
            <span class="material-symbols-outlined text-[16px]">home</span>
            <span>Beranda</span>
        </a>
        <span class="material-symbols-outlined text-[14px]">chevron_right</span>
        <span class="text-primary font-bold">Kemitraan & Franchise</span>
    </nav>
</section>

<section class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-4 lg:py-8">
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

        <div class="lg:col-span-7 flex flex-col gap-5">
            <span class="inline-flex items-center gap-2 px-3 py-1.5 rounded-full bg-secondary-fixed text-on-secondary-fixed w-fit shadow-sm">
                <span class="material-symbols-outlined text-[16px] text-secondary">workspace_premium</span>
                <span class="text-[11px] tracking-wide uppercase font-bold">Peluang Usaha Kuliner Street Food Fusion #1</span>
            </span>

            <h1 class="text-[30px] lg:text-[42px] lg:leading-[1.15] font-bold text-on-surface tracking-tight">
                Bangun Bisnis Kuliner Menguntungkan Bersama <span class="text-primary">Takoyaki Nusantara</span>
            </h1>

            <p class="text-[15px] lg:text-[17px] text-on-surface-variant leading-relaxed">
                Konsep street food viral Jepang × Nusantara dengan margin tinggi, sistem operasional teruji tanpa Royalty Fee, dan pasokan bahan baku halal terstandarisasi dari Central Kitchen.
            </p>

            {{-- Metric Badges --}}
            <div class="grid grid-cols-2 sm:grid-cols-4 gap-2.5 pt-2">
                @php
                    $metrics = [
                        ['value'=>'100%',        'label'=>'Keuntungan Milik Mitra', 'color'=>'text-primary'],
                        ['value'=>'2 - 4 Bulan', 'label'=>'Estimasi Rata-rata BEP', 'color'=>'text-primary'],
                        ['value'=>'50+ Mitra',   'label'=>'Aktif di 12 Kota Besar', 'color'=>'text-primary'],
                        ['value'=>'Halal MUI',   'label'=>'Bahan Baku Central',     'color'=>'text-tertiary'],
                    ];
                @endphp
                @foreach($metrics as $m)
                    <div class="p-3 rounded-xl bg-surface-container-low flex flex-col shadow-sm">
                        <span class="text-[15px] font-bold {{ $m['color'] }}">{{ $m['value'] }}</span>
                        <span class="text-[11px] text-on-surface-variant mt-0.5">{{ $m['label'] }}</span>
                    </div>
                @endforeach
            </div>

            {{-- CTAs --}}
            <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-3 pt-2">
                @php
                    $wa = 'https://wa.me/'.config('site.whatsapp').'?text='.urlencode('Halo, saya tertarik dengan kemitraan Takoyaki Nusantara.');
                @endphp
                <a href="#form-daftar" class="inline-flex items-center justify-center gap-2 bg-primary hover:bg-primary-container text-on-primary px-5 py-3.5 rounded-lg shadow-md hover:shadow-lg transition-all text-[14px] font-bold">
                    <span class="material-symbols-outlined text-[20px]">chat</span>
                    <span>Daftar Menjadi Mitra</span>
                </a>
                <a href="{{ $wa }}" target="_blank" rel="noopener" class="inline-flex items-center justify-center gap-2 bg-surface-container-lowest hover:bg-surface-container-high text-primary px-5 py-3.5 rounded-lg shadow-sm transition-all text-[14px] font-bold border border-outline-variant/40">
                    <span class="material-symbols-outlined text-[20px]">download</span>
                    <span>Download Proposal (PDF)</span>
                </a>
            </div>
        </div>

        {{-- Image --}}
        <div class="lg:col-span-5 relative">
            <div class="relative rounded-2xl overflow-hidden shadow-xl bg-surface-container-high aspect-[4/3] lg:aspect-square w-full">
                <img class="w-full h-full object-cover"
                     alt="Mitra Takoyaki Nusantara"
                     src="https://lh3.googleusercontent.com/aida-public/AB6AXuDfL4BhSKR3aiBwYCWgf0n2aL8lYNi8CFRj4-am6FZ3XfZxfFOgc_gWET97_1BwQ1bbrQgBghCgtk_vXVGFfIu0gv_7nNIwO21xZUb7macgMI95DI1if3AGaBQJXXbcqIi3CzneM_XyEgZzmBW2bV_votP6elcMvOvgtrtib3vAyRTuYpI-O5oDmSewUG7IfxmVVy9otkZHbUsRpe0DFHBgnwtiZ7gtp9irp80OrBm6NOAdCIWU6iF9">
                <div class="absolute inset-0 bg-gradient-to-t from-black/80 via-transparent to-transparent"></div>
                <div class="absolute bottom-4 left-4 right-4 p-3 rounded-xl bg-white/95 backdrop-blur-md shadow-lg flex items-center justify-between">
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                            <span class="material-symbols-outlined text-[20px]">storefront</span>
                        </div>
                        <div class="leading-tight">
                            <span class="text-[12px] font-bold text-on-surface block">Booth Kayu Tradisional & Modern</span>
                            <span class="text-[11px] text-on-surface-variant">Siap Beroperasi 7-14 Hari</span>
                        </div>
                    </div>
                    <span class="material-symbols-outlined text-tertiary text-[20px]">verified</span>
                </div>
            </div>
        </div>
    </div>
</section>