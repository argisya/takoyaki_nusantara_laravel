<section class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-16">

    <x-section-header
        label="Tahapan Praktis"
        title="CARA BERGABUNG"
        subtitle="7 langkah mudah dan transparan untuk memulai bisnis bersama Takoyaki Nusantara." />

    @php
        $steps = [
            ['n'=>'01', 'title'=>'Cek Lokasi Usaha',       'desc'=>'Lokasi calon usaha diperiksa dan dipertimbangkan.'],
            ['n'=>'02', 'title'=>'Cek Data Diri',          'desc'=>'Melakukan verifikasi data calon mitra.'],
            ['n'=>'03', 'title'=>'Perjanjian Kerja Sama',  'desc'=>'Menandatangani Surat Perjanjian Kerja Sama.'],
            ['n'=>'04', 'title'=>'Payment Paket Usaha',    'desc'=>'Melakukan pembayaran paket kemitraan.'],
            ['n'=>'05', 'title'=>'Training & SOP',         'desc'=>'Mitra mendapatkan pelatihan dan penjelasan SOP.'],
            ['n'=>'06', 'title'=>'Pengiriman Paket Usaha', 'desc'=>'Paket usaha dikirimkan kepada mitra.'],
            ['n'=>'07', 'title'=>'Mulai Berbisnis',        'desc'=>'Mitra siap menjalankan usaha bersama Takoyaki Nusantara.'],
        ];
    @endphp

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">
        @foreach($steps as $s)
            <div class="bg-surface-container-lowest p-5 rounded-2xl shadow-sm hover:shadow-md transition-shadow flex flex-col justify-between gap-3 border border-outline-variant/30 {{ $loop->last ? 'sm:col-span-2 lg:col-span-1 bg-gradient-to-br from-primary/5 to-surface-container-lowest border-primary/30' : '' }}">
                <div class="flex items-center justify-between">
                    <span class="text-[12px] font-bold text-primary px-2.5 py-1 rounded-lg bg-primary/10">Langkah {{ $s['n'] }}</span>
                    @if($loop->last)
                        <span class="material-symbols-outlined text-primary text-[22px]">rocket_launch</span>
                    @else
                        <span class="material-symbols-outlined text-outline text-[20px]">arrow_forward</span>
                    @endif
                </div>
                <div>
                    <h4 class="text-[15.5px] font-bold text-on-surface">{{ $s['n'] }} — {{ $s['title'] }}</h4>
                    <p class="text-[13px] text-on-surface-variant mt-1.5 leading-relaxed">{{ $s['desc'] }}</p>
                </div>
            </div>
        @endforeach
    </div>
</section>