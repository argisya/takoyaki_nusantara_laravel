<section class="w-full bg-surface-container-low py-16">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <x-section-header
            label="Fleksibilitas Bisnis"
            title="Dua Skema Kerja Sama Kemitraan"
            subtitle="Pilih apakah Anda ingin menjalankan sendiri atau mempercayakan operasional harian secara otomatis." />

        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @php
                $schemes = [
                    [
                        'badge'=>'Paling Populer', 'badgeStyle'=>'bg-primary/10 text-primary',
                        'icon'=>'person', 'iconColor'=>'text-primary',
                        'title'=>'1. Skema Kemitraan Mandiri (Owner-Operator)',
                        'desc'=>'Mitra mengelola sendiri operasional harian, merekrut karyawan, dan menentukan strategi shift. Seluruh omset dan keuntungan bersih 100% masuk ke rekening mitra.',
                        'items'=>['100% laba bersih menjadi milik Anda tanpa potongan','Bebas menentukan jam operasional toko','Pusat tetap memasok bahan baku halal & dukungan promosi'],
                        'footerLabel'=>'Bagi Hasil Pusat:', 'footerValue'=>'0% (Rp 0 Royalty Fee)', 'footerColor'=>'text-primary',
                    ],
                    [
                        'badge'=>'Investasi Pasif', 'badgeStyle'=>'bg-secondary/10 text-secondary',
                        'icon'=>'hub', 'iconColor'=>'text-secondary',
                        'title'=>'2. Skema Kemitraan Autopilot (Bagi Hasil)',
                        'desc'=>'Cocok untuk profesional, investor, atau Anda yang sibuk. Tim manajemen pusat yang mengelola rekrutmen staf, operasional booth, dan pelaporan keuangan real-time.',
                        'items'=>['Operasional dikelola tim profesional pusat','Laporan keuangan transparan harian via aplikasi kasir','Sangat cocok bagi pemodal yang ingin passive income'],
                        'footerLabel'=>'Skema Bagi Hasil:', 'footerValue'=>'70% Mitra : 30% Manajemen', 'footerColor'=>'text-secondary',
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