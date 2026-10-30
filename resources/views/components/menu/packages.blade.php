<section class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop pt-6 pb-3" id="daftar-paket">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-6">
        <div class="flex flex-col gap-2">
            <span class="text-[10px] text-primary font-bold tracking-widest uppercase">Pilihan Menu Lengkap</span>
            <h2 class="text-[26px] lg:text-[32px] font-bold tracking-tight">Katalog Takoyaki & Okonomiyaki</h2>
            <p class="text-[13.5px] text-on-surface-variant max-w-2xl">
                Nikmati Takoyaki dalam pilihan ukuran Size S, M, dan L dengan tekstur crispy di luar & creamy di dalam, serta Okonomiyaki lezat khas Jepang.
            </p>
        </div>
        <div class="bg-surface-container-high px-3 py-1.5 rounded-xl flex items-center gap-2 text-on-surface-variant max-w-xs">
            <span class="material-symbols-outlined text-primary text-[16px]">info</span>
            <span class="text-[11px]">Semua menu disajikan hangat dengan Katsuobushi melimpah</span>
        </div>
    </div>

    @php
        $packages = [
            [
                'id'=>'size_s', 'img'=>asset('images/produk-4.webp'),
                'badge'=>'Porsi Praktis', 'badgeStyle'=>'bg-white/90 text-on-surface-variant',
                'pill'=>'Size S', 'name'=>'Takoyaki Size S',
                'desc'=>'Porsi personal praktis yang pas untuk ngemil santai atau pengganjal lapar.',
                'noteIcon'=>'check_circle', 'noteText'=>'Free Saus Spesial + Katsuobushi',
                'price'=>'15.000', 'perButir'=>'Porsi Personal Ringan', 'strike'=>null,
                'cta'=>'Pilih Ukuran Ini', 'highlight'=>false,
            ],
            [
                'id'=>'size_m', 'img'=>asset('images/produk-5.webp'),
                'badge'=>'Best Seller', 'badgeStyle'=>'bg-primary text-on-primary',
                'pill'=>'Size M', 'name'=>'Takoyaki Size M',
                'desc'=>'Ukuran sedang paling diminati! Porsi pas mengenyangkan dengan tekstur creamy khas.',
                'noteIcon'=>'thumb_up', 'noteText'=>'Pilihan #1 Pelanggan Setia',
                'price'=>'20.000', 'perButir'=>'Porsi Sedang Favorit', 'strike'=>null,
                'cta'=>'Pilih Ukuran Ini', 'highlight'=>true, 'ribbon'=>'TERPOPULER • BEST VALUE',
            ],
            [
                'id'=>'size_l', 'img'=>asset('images/produk-1.webp'),
                'badge'=>'Porsi Puas', 'badgeStyle'=>'bg-tertiary text-on-tertiary',
                'pill'=>'Size L', 'name'=>'Takoyaki Size L',
                'desc'=>'Ukuran besar yang pas untuk dinikmati bersama teman atau keluarga dengan saus berlimpah.',
                'noteIcon'=>'group', 'noteText'=>'Porsi Puas / Sharing',
                'price'=>'30.000', 'perButir'=>'Porsi Puas Sharing', 'strike'=>null,
                'cta'=>'Pilih Ukuran Ini', 'highlight'=>false,
            ],
            [
                'id'=>'okonomiyaki', 'img'=>asset('images/produk-2.webp'),
                'badge'=>'Menu Spesial', 'badgeStyle'=>'bg-primary-container text-on-primary-container',
                'pill'=>'Japanese Pancake', 'name'=>'Okonomiyaki',
                'desc'=>'Pancake gurih khas Jepang dengan paduan sayuran segar, adonan telur lembut, dan saus otentik.',
                'noteIcon'=>'restaurant', 'noteText'=>'Saus Gurih + Mayo + Katsuobushi',
                'price'=>'25.000', 'perButir'=>'Porsi Lengkap Mengenyangkan', 'strike'=>null,
                'cta'=>'Pilih Menu Ini', 'highlight'=>false,
            ],
        ];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
        @foreach($packages as $p)
            <article class="bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden relative group {{ $p['highlight'] ? 'shadow-md lg:-translate-y-2' : '' }}">
                @if(!empty($p['ribbon']))
                    <div class="bg-secondary text-on-secondary text-center py-1 text-[10px] tracking-widest uppercase font-bold flex items-center justify-center gap-1">
                        <span class="material-symbols-outlined text-[13px]">stars</span>
                        <span>{{ $p['ribbon'] }}</span>
                    </div>
                @endif

                <div class="relative h-48 overflow-hidden bg-surface-container">
                    <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}" loading="lazy"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-3 left-3 {{ $p['badgeStyle'] }} px-2.5 py-0.5 rounded-full shadow-sm">
                        <span class="text-[10px] font-bold uppercase">{{ $p['badge'] }}</span>
                    </div>
                    <div class="absolute bottom-3 right-3 bg-black/75 backdrop-blur-sm px-2.5 py-0.5 rounded-md text-white">
                        <span class="text-[10px] font-bold">{{ $p['pill'] }}</span>
                    </div>
                </div>

                <div class="p-4 flex flex-col flex-1 justify-between gap-4">
                    <div class="flex flex-col gap-2">
                        <h3 class="text-[16px] font-bold text-on-surface">{{ $p['name'] }}</h3>
                        <p class="text-[12.5px] text-on-surface-variant leading-relaxed">{{ $p['desc'] }}</p>

                        <div class="bg-surface-container-low p-2 rounded-lg mt-1 flex items-center gap-2">
                            <span class="material-symbols-outlined text-tertiary text-[15px]">{{ $p['noteIcon'] }}</span>
                            <span class="text-[11px] text-on-surface-variant">{{ $p['noteText'] }}</span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <div class="flex items-baseline justify-between">
                            <div>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <span class="text-[20px] text-primary font-bold">Rp {{ $p['price'] }}</span>
                                    @if($p['strike'])
                                        <span class="line-through text-on-surface-variant text-[12px]">{{ $p['strike'] }}</span>
                                    @endif
                                </div>
                                <span class="text-[11px] text-on-surface-variant block">{{ $p['perButir'] }}</span>
                            </div>
                        </div>

                        <button type="button"
                                onclick="selectPackageEstimator('{{ $p['id'] }}', {{ (int) str_replace('.', '', $p['price']) }}, '{{ $p['name'] }} ({{ $p['pill'] }})')"
                                class="w-full {{ $p['highlight'] ? 'bg-primary hover:bg-primary-container text-on-primary shadow-md' : 'bg-surface-container-high hover:bg-primary hover:text-on-primary text-on-surface' }} font-semibold text-[12.5px] py-2.5 rounded-xl transition-all flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-[16px]">add_shopping_cart</span>
                            <span>{{ $p['cta'] }}</span>
                        </button>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</section>