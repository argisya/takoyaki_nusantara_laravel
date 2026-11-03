<section class="w-full bg-surface-container-low py-16">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <x-section-header
            label="Transparansi Finansial"
            title="Sistem Kemitraan Tanpa Bagi Hasil"
            subtitle="Seluruh laba dan perputaran omset harian menjadi hak mutlak mitra 100% tanpa potongan royalti." />

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @php
                $schemes = [
                    [
                        'badge'=>'Hak Penuh Mitra', 'badgeStyle'=>'bg-primary/10 text-primary',
                        'icon'=>'payments', 'iconColor'=>'text-primary',
                        'title'=>'100% Keuntungan Milik Anda',
                        'desc'=>'Takoyaki Nusantara tidak membebankan potongan omset atau bagi hasil bulanan. Seluruh hasil penjualan langsung masuk ke kas mitra sepenuhnya.',
                        'items'=>[
                            'Bebas biaya royalti bulanan (Rp 0 Royalty Fee)',
                            'Tidak ada bagi hasil persentase dari omset harian',
                            'Perputaran kas usaha sepenuhnya dikelola oleh mitra',
                        ],
                        'footerLabel'=>'Potongan Omset Bulanan:', 'footerValue'=>'0% (Rp 0)', 'footerColor'=>'text-primary',
                    ],
                    [
                        'badge'=>'Pendampingan Usaha', 'badgeStyle'=>'bg-secondary/10 text-secondary',
                        'icon'=>'handshake', 'iconColor'=>'text-secondary',
                        'title'=>'Dukungan Berkelanjutan Tanpa Biaya Tersembunyi',
                        'desc'=>'Meskipun tanpa bagi hasil, mitra tetap memperoleh dukungan menyeluruh dari tim manajemen pusat untuk menjaga keberlangsungan usaha.',
                        'items'=>[
                            'Dukungan pasokan bahan baku halal berkualitas',
                            'Pelatihan staff dan konsultasi operasional berkala',
                            'Dukungan promosi, materi branding, dan marketplace',
                        ],
                        'footerLabel'=>'Dukungan Tim Pusat:', 'footerValue'=>'Berkesinambungan', 'footerColor'=>'text-secondary',
                    ],
                ];
            @endphp

            @foreach($schemes as $s)
                <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col justify-between gap-4">
                    <div class="flex flex-col gap-3">
                        <div class="flex items-center justify-between">
                            <span class="px-3 py-1 rounded-full {{ $s['badgeStyle'] }} text-[10.5px] font-bold">{{ $s['badge'] }}</span>
                            <span class="material-symbols-outlined {{ $s['iconColor'] }} text-[28px]">{{ $s['icon'] }}</span>
                        </div>
                        <h3 class="text-[18px] font-bold text-on-surface">{{ $s['title'] }}</h3>
                        <p class="text-[13px] text-on-surface-variant leading-relaxed">{{ $s['desc'] }}</p>
                        <ul class="flex flex-col gap-2 text-[12.5px] text-on-surface pt-2">
                            @foreach($s['items'] as $item)
                                <li class="flex items-center gap-2">
                                    <span class="material-symbols-outlined text-tertiary text-[17px]">check</span>
                                    {{ $item }}
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="p-3 bg-surface-container-low rounded-xl text-[12.5px] flex items-center justify-between">
                        <span>{{ $s['footerLabel'] }}</span>
                        <strong class="{{ $s['footerColor'] }}">{{ $s['footerValue'] }}</strong>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>