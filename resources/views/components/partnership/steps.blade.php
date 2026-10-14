<section class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-16">

    <x-section-header
        label="Langkah Praktis"
        title="Alur Pendaftaran Hingga Buka Gerai"
        subtitle="Proses mudah, cepat, dan transparan dalam waktu 7 hingga 14 hari kerja." />

    @php
        $steps = [
            ['n'=>1, 'title'=>'Konsultasi Lokasi', 'desc'=>'Hubungi CS Kemitraan via WhatsApp. Diskusikan rencana titik lokasi dan ketersediaan kuota zona kotamu.', 'color'=>'bg-primary text-on-primary'],
            ['n'=>2, 'title'=>'Form & DP Komitmen', 'desc'=>'Pengisian form pendaftaran resmi dan pembayaran DP komitmen untuk penguncian wilayah eksklusif.', 'color'=>'bg-primary text-on-primary'],
            ['n'=>3, 'title'=>'Pengiriman Booth', 'desc'=>'Produksi booth & pengiriman seluruh perlengkapan masak + starter pack bahan baku ke alamatmu.', 'color'=>'bg-primary text-on-primary'],
            ['n'=>4, 'title'=>'Training SOP Karyawan', 'desc'=>'Pelatihan intensif pembuatan takoyaki tekstur sempurna, sanitasi, dan penggunaan kasir online.', 'color'=>'bg-primary text-on-primary'],
            ['n'=>5, 'title'=>'Grand Opening!', 'desc'=>'Gerai resmi dibuka dengan dukungan promosi media sosial serentak dari tim marketing pusat!', 'color'=>'bg-tertiary text-on-tertiary'],
        ];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
        @foreach($steps as $s)
            <div class="bg-surface-container-lowest p-4 rounded-2xl shadow-sm flex flex-col gap-3">
                <div class="w-10 h-10 rounded-full {{ $s['color'] }} flex items-center justify-center font-bold text-[16px]">{{ $s['n'] }}</div>
                <h4 class="text-[15px] font-bold text-on-surface">{{ $s['title'] }}</h4>
                <p class="text-[12px] text-on-surface-variant leading-relaxed">{{ $s['desc'] }}</p>
            </div>
        @endforeach
    </div>
</section>