<section class="w-full bg-surface-container-low py-16 my-4">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <x-section-header
            label="Nilai Lebih Kemitraan"
            title="Keuntungan Menjadi Mitra"
            subtitle="Dukungan penuh dari Takoyaki Nusantara untuk mempermudah operasional dan akselerasi bisnis Anda." />

        @php
            $pillars = [
                ['icon'=>'verified',        'title'=>'Brand dan produk yang telah dikembangkan', 'desc'=>'Memanfaatkan kekuatan brand Takoyaki Nusantara dan formulasi produk otentik yang sudah terbukti diminati masyarakat.'],
                ['icon'=>'location_on',     'title'=>'Bantuan memilih lokasi strategis',          'desc'=>'Pendampingan analisis titik lokasi usaha yang potensial dan memiliki visibilitas serta traffic pelanggan optimal.'],
                ['icon'=>'school',          'title'=>'Pelatihan dan pendampingan',                'desc'=>'Pelatihan teknik live cooking, penjelasan SOP terstandarisasi, serta konsultasi berkelanjutan selama usaha berjalan.'],
                ['icon'=>'settings_suggest','title'=>'Metode bisnis yang telah diterapkan',       'desc'=>'Menerapkan alur operasional dan sistem bisnis siap pakai yang praktis dan teruji efektif bagi wirausahawan baru.'],
                ['icon'=>'inventory_2',     'title'=>'Dukungan pemasok bahan baku',              'desc'=>'Kepastian pasokan bahan baku berkualitas secara konsisten demi menjaga kesegaran dan standar mutu di setiap porsi.'],
                ['icon'=>'campaign',        'title'=>'Dukungan pemasaran',                       'desc'=>'Akses materi promosi visual, kampanye digital, dan panduan strategi pemasaran untuk meningkatkan penjualan lokal.'],
                ['icon'=>'storefront',      'title'=>'Dukungan marketplace',                     'desc'=>'Bantuan onboarding dan integrasi pada aplikasi online / marketplace agar produk menjangkau konsumen lebih luas.'],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach($pillars as $p)
                <div class="bg-surface-container-lowest p-5 rounded-2xl shadow-sm hover:shadow-md transition-shadow flex flex-col gap-3">
                    <div class="w-12 h-12 rounded-xl bg-primary/10 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[26px]">{{ $p['icon'] }}</span>
                    </div>
                    <h3 class="text-[15.5px] font-bold text-on-surface">{{ $p['title'] }}</h3>
                    <p class="text-[13px] text-on-surface-variant leading-relaxed">{{ $p['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>