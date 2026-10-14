<section class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-16" id="paket-kemitraan">

    <x-section-header
        label="Investasi Terjangkau"
        title="Pilihan Paket Kemitraan"
        subtitle="Pilih paket sesuai modal, potensi traffic, dan rencana lokasi usaha Anda." />

    @php
        $packages = [
            [
                'name'=>'Paket Booth Portable / Tenda',
                'tag'=>'Hemat & Fleksibel', 'tagStyle'=>'bg-surface-container text-on-surface',
                'desc'=>'Ideal untuk area teras minimarket, bazaar mingguan, atau pelataran ruko.',
                'price'=>'14.500.000', 'strike'=>'18.000.000', 'priceNote'=>'All-In Siap Jualan Langsung',
                'features'=>[
                    'Booth knock-down portable aluminium & tenda canopy',
                    '1x Kompor ganda wajan takoyaki besi cor (total 56 lubang)',
                    'Starter pack bahan baku awal untuk 300 porsi pertama',
                    'Perlengkapan masak lengkap (jarum, botol saus, oil dropper)',
                    '2 Set seragam apron & headband tenugui Nusantara',
                    'Buku manual SOP & sertifikat lisensi kemitraan resmi',
                ],
                'cta'=>'Pilih Paket Portable',
                'highlight'=>false,
            ],
            [
                'name'=>'Paket Semi-Container Eksklusif',
                'tag'=>'Semi-Outdoor Premium', 'tagStyle'=>'bg-secondary-fixed text-on-secondary-fixed',
                'desc'=>'Booth estetika kayu & besi galvanis berlampu lampion Jepang, magnet visual di pinggir jalan ramai.',
                'price'=>'22.500.000', 'strike'=>'27.000.000', 'priceNote'=>'Investasi Ideal Cepat Balik Modal',
                'features'=>[
                    'Booth semi-container besi galvanis + kayu pinus tahan cuaca (200x120cm)',
                    'Neon signage logo & 2x Lampion khas Jepang',
                    '2x Kompor Takoyaki besi cor komersial (56 lubang) + regulator SNI',
                    'Starter pack komplit untuk <strong>500 porsi</strong> bahan baku premium',
                    'Chest freezer pendingin daging beku 100L mini',
                    'Aplikasi Kasir POS Digital & Printer Struk Bluetooth (Gratis 1 Thn)',
                    'Dukungan marketing Google Maps & Meta Ads target lokal',
                ],
                'cta'=>'Pilih Paket Best Seller',
                'highlight'=>true, 'ribbon'=>'PALING DIMINATI • BEST VALUE',
            ],
            [
                'name'=>'Paket Mall & Island Outlet',
                'tag'=>'Flagship / Mall Island', 'tagStyle'=>'bg-surface-container text-on-surface',
                'desc'=>'Konsep gerai permanen eksklusif untuk food court mall terkemuka, stasiun, atau airport.',
                'price'=>'38.000.000', 'strike'=>'45.000.000', 'priceNote'=>'Standar Mall Spesifikasi Tinggi',
                'features'=>[
                    'Booth Island Mall HPL anti gores mewah + exhaust hood',
                    'Pilihan kompor listrik induksi / gas safety valve',
                    'Under-counter stainless chiller & display acrylic showcase',
                    'Starter pack komplit untuk <strong>800 porsi</strong> varian lengkap',
                    'Tablet POS iPad / Android Touchscreen + Cash Drawer otomatis',
                    'Pendampingan on-site tim head chef selama grand opening 3 hari',
                ],
                'cta'=>'Pilih Paket Mall Flagship',
                'highlight'=>false,
            ],
        ];
    @endphp

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 items-stretch">
        @foreach($packages as $p)
            <div class="bg-surface-container-lowest rounded-2xl p-6 shadow-sm flex flex-col justify-between transition-all hover:shadow-md relative {{ $p['highlight'] ? 'shadow-xl lg:-translate-y-2' : '' }}">
                @if(!empty($p['ribbon']))
                    <div class="absolute -top-3 left-1/2 -translate-x-1/2 px-4 py-1 rounded-full bg-primary text-on-primary text-[10.5px] font-bold tracking-wide shadow-md flex items-center gap-1 whitespace-nowrap">
                        <span class="material-symbols-outlined text-[13px]">local_fire_department</span>
                        <span>{{ $p['ribbon'] }}</span>
                    </div>
                @endif

                <div class="flex flex-col gap-4 {{ !empty($p['ribbon']) ? 'pt-2' : '' }}">
                    <div class="flex items-center justify-between flex-wrap gap-2">
                        <span class="px-2.5 py-1 rounded-full {{ $p['tagStyle'] }} text-[10.5px] font-bold">{{ $p['tag'] }}</span>
                        <span class="text-[11px] line-through text-outline">Rp {{ $p['strike'] }}</span>
                    </div>

                    <div>
                        <h3 class="text-[20px] font-bold text-on-surface">{{ $p['name'] }}</h3>
                        <p class="text-[12px] text-on-surface-variant mt-1">{{ $p['desc'] }}</p>
                    </div>

                    <div class="py-2">
                        <div class="text-[26px] font-bold text-primary">Rp {{ $p['price'] }}</div>
                        <span class="text-[11px] text-on-surface-variant">{{ $p['priceNote'] }}</span>
                    </div>

                    <div class="h-px bg-outline-variant/30 w-full"></div>

                    <ul class="flex flex-col gap-2.5 text-[12.5px] text-on-surface">
                        @foreach($p['features'] as $f)
                            <li class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-[17px] text-tertiary shrink-0 mt-0.5">check_circle</span>
                                <span>{!! $f !!}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>

                <div class="pt-6">
                    <a href="#form-daftar"
                       class="w-full inline-flex items-center justify-center gap-2 py-3 rounded-lg {{ $p['highlight'] ? 'bg-primary hover:bg-primary-container text-on-primary' : 'bg-surface-container hover:bg-surface-container-high text-on-surface' }} text-[13px] font-bold transition-all">
                        <span>{{ $p['cta'] }}</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</section>