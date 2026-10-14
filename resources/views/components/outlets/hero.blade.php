<section class="relative w-full bg-gradient-to-b from-surface-container-low via-surface to-surface pb-10">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        {{-- Breadcrumb --}}
        <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-[12px] text-on-surface-variant pt-4 mb-3">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors flex items-center gap-1">
                <span class="material-symbols-outlined text-[16px]">home</span>
                <span>Beranda</span>
            </a>
            <span class="material-symbols-outlined text-[14px]">chevron_right</span>
            <span class="text-primary font-bold uppercase tracking-wide">Lokasi & Cabang Outlet</span>
        </nav>

        <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mt-2">
            <div class="max-w-3xl">
                <span class="inline-flex items-center gap-2 bg-primary/10 text-primary px-3 py-1 rounded-full text-[10.5px] font-bold shadow-sm mb-3">
                    <span class="material-symbols-outlined text-[15px]">storefront</span>
                    <span class="tracking-wide">Jaringan Nasional 50+ Booth Aktif</span>
                </span>
                <h1 class="text-[26px] md:text-[32px] font-bold text-on-surface tracking-tight">
                    Temukan Booth <span class="text-primary underline decoration-secondary-container decoration-wavy decoration-2">Takoyaki Nusantara</span> di Kotamu
                </h1>
                <p class="text-[15px] text-on-surface-variant mt-2 max-w-2xl leading-relaxed">
                    Kunjungi gerai fisik terdekat untuk sensasi takoyaki hangat krispi langsung dari wajan besi cor, atau hubungi WhatsApp Owner untuk pemesanan cepat & katering.
                </p>
            </div>

            <div class="flex items-center gap-4 bg-surface-container-lowest p-3 rounded-xl shadow-sm self-start lg:self-end">
                @php
                    $quick = [
                        ['icon'=>'pin_drop',          'value'=>'52', 'label'=>'Booth Aktif',  'color'=>'primary'],
                        ['icon'=>'location_city',     'value'=>'12', 'label'=>'Kota Besar',   'color'=>'secondary'],
                        ['icon'=>'star',              'value'=>'4.9','label'=>'Google Review','color'=>'secondary-container', 'fill'=>true],
                    ];
                @endphp
                @foreach($quick as $i => $q)
                    <div class="flex items-center gap-2 px-3 {{ $i < count($quick)-1 ? 'border-r border-outline-variant/30' : '' }}">
                        <span class="material-symbols-outlined text-{{ $q['color'] }} text-[22px]"
                              style="{{ !empty($q['fill']) ? "font-variation-settings:'FILL' 1;" : '' }}">{{ $q['icon'] }}</span>
                        <div class="leading-none">
                            <p class="text-[15px] font-bold text-on-surface">{{ $q['value'] }}{{ $q['icon']==='star' ? '★' : '' }}</p>
                            <p class="text-[10.5px] text-on-surface-variant mt-1">{{ $q['label'] }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>