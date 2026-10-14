<section class="w-full bg-surface-container-low py-16 my-4">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <x-section-header
            label="Keunggulan Eksklusif"
            title="6 Alasan Mengapa Bergabung Bersama Kami"
            subtitle="Kemitraan dirancang transparan, berkelanjutan, dan memprioritaskan kesuksesan mitra." />

        @php
            $pillars = [
                ['icon'=>'percent',       'title'=>'Tanpa Royalty & Franchise Fee',    'desc'=>'Tidak ada potongan royalti bulanan maupun biaya perpanjangan tahunan. 100% keuntungan hak mutlak mitra.'],
                ['icon'=>'verified',      'title'=>'Bahan Baku Halal & Terstandarisasi','desc'=>'Adonan premix, gurita segar, saus tare, & rempah Nusantara bersertifikat halal BPJPH/MUI dari Central Kitchen.'],
                ['icon'=>'trending_up',   'title'=>'BEP / Balik Modal Tercepat',       'desc'=>'Dengan margin keuntungan kotor rata-rata 55-60%, sebagian besar mitra capai BEP hanya dalam 2-4 bulan.'],
                ['icon'=>'school',        'title'=>'SOP & Pelatihan Karyawan Lengkap', 'desc'=>'Buku panduan operasional, video tutorial pemanggangan, hingga tata kelola sanitasi dan pelayanan ramah.'],
                ['icon'=>'campaign',      'title'=>'Dukungan Pemasaran Digital Pusat', 'desc'=>'Pusat bantu pendaftaran merchant online (GoFood, GrabFood, ShopeeFood) & promosi iklan berbayar per zona.'],
                ['icon'=>'store',         'title'=>'Desain Booth Estetik & Siap Jual', 'desc'=>'Booth fotogenik bergaya gerobak Yatai Jepang modern beraksen kayu Nusantara, menarik konsumen singgah.'],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @foreach($pillars as $p)
                <div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm hover:shadow-md transition-shadow flex flex-col gap-3">
                    <div class="w-12 h-12 rounded-lg bg-primary/10 flex items-center justify-center text-primary">
                        <span class="material-symbols-outlined text-[26px]">{{ $p['icon'] }}</span>
                    </div>
                    <h3 class="text-[15px] font-bold text-on-surface">{{ $p['title'] }}</h3>
                    <p class="text-[13px] text-on-surface-variant leading-relaxed">{{ $p['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>