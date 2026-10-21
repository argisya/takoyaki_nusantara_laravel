<section class="w-full bg-surface-container-low py-12">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

            @php
                $stats = [
                    ['icon'=>'storefront',      'badge'=>'Sejak 2024',  'value'=>'Tahun 2024',     'sub'=>'Awal Perjalanan',        'desc'=>'Berawal dari inisiatif wirausaha mahasiswa mandiri.',    'color'=>'primary'],
                    ['icon'=>'pin_drop',        'badge'=>'Berkembang',  'value'=>'7 Cabang',       'sub'=>'Outlet Aktif',           'desc'=>'Tersebar di lokasi strategis & siap bermitra.',           'color'=>'secondary'],
                    ['icon'=>'verified_user',   'badge'=>'Kualitas Mutu','value'=>'100% Halal',    'sub'=>'Higienis & Terjamin',    'desc'=>'Bahan baku pilihan dan selalu terjaga mutunya.',          'color'=>'tertiary'],
                    ['icon'=>'skillet',        'badge'=>'Khas Autentik','value'=>'Crispy & Creamy','sub'=>'Karakter Produk',        'desc'=>'Sensasi renyah di luar, lembut creamy di dalam.',         'color'=>'primary'],
                ];

                // Kelas warna ditulis literal agar ter-generate Tailwind (tidak boleh dinamis).
                $tone = [
                    'primary'   => ['soft' => 'bg-primary/10 text-primary',     'text' => 'text-primary'],
                    'secondary' => ['soft' => 'bg-secondary/10 text-secondary', 'text' => 'text-secondary'],
                    'tertiary'  => ['soft' => 'bg-tertiary/10 text-tertiary',   'text' => 'text-tertiary'],
                ];
            @endphp

            @foreach($stats as $s)
                <article class="bg-surface-container-lowest p-5 rounded-2xl shadow-sm border border-outline-variant/40 flex flex-col justify-between hover:shadow-md transition-shadow gap-3">
                    <div class="flex items-center justify-between">
                        <div class="w-12 h-12 rounded-xl {{ $tone[$s['color']]['soft'] }} flex items-center justify-center">
                            <span class="material-symbols-outlined text-[24px]">{{ $s['icon'] }}</span>
                        </div>
                        <span class="text-[10px] {{ $tone[$s['color']]['soft'] }} font-bold px-2 py-0.5 rounded-full">
                            {{ $s['badge'] }}
                        </span>
                    </div>
                    <div>
                        <span class="text-[22px] font-bold {{ $tone[$s['color']]['text'] }} tracking-tight block">{{ $s['value'] }}</span>
                        <p class="text-[12px] text-on-surface font-semibold mt-1">{{ $s['sub'] }}</p>
                        <p class="text-[12px] text-on-surface-variant mt-1 leading-relaxed">{{ $s['desc'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>