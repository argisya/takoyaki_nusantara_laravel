<section class="w-full py-16 lg:py-20 bg-surface" id="cerita-kami">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">

            {{-- Story + Quote --}}
            <div class="lg:col-span-5 flex flex-col gap-6">
                <div class="flex flex-col gap-4">
                    <span class="text-[11px] text-primary uppercase tracking-widest font-bold">Kisah Kami</span>
                    <h2 class="text-[26px] lg:text-[32px] font-bold text-on-surface tracking-tight leading-tight">
                        Bermula Dari Gerobak Kayu di Sudut Kota Pelajar
                    </h2>
                    <div class="flex flex-col gap-3 text-[14px] text-on-surface-variant leading-relaxed">
                        <p>Kisah Takoyaki Nusantara bermula pada penghujung tahun 2020 di Yogyakarta. Dua sahabat karib yang menggemari kuliner jalanan Dotonbori menyadari satu hal: takoyaki di Indonesia sering memakai sosis biasa, teksturnya lembek, atau harganya terlampau mahal.</p>
                        <p>Dengan tekad menghadirkan kuliner otentik Jepang berkualitas bintang lima dengan harga ramah kantong, mereka meracik adonan khusus dipadukan rempah lokal. Resep adonan berkulit garing keemasan dengan gurita kenyal asli seketika memikat lidah.</p>
                    </div>
                </div>

                <div class="relative rounded-2xl overflow-hidden shadow-md">
                    <img alt="Takoyaki autentik" class="w-full h-48 object-cover"
                         src="https://lh3.googleusercontent.com/aida/AEtjO1WTr9sZy5VBJcnKTdt1AQlX4tVcON5qX65NBntNcBK3q_CNQ-a-O_EJjG9mCqXW77zd5dZAvlmICc_nBESyMG6An4gHaTQsMbPXS4QPNkPIfly1NDcZ9NjsgF9JXyZnULliX3XYu6kykiiMheWlxHEVMhhEMZRp81p1Bo5i_Cm1-fN2z1nSVlADv18U5ua9sRV0fsF9vCgUiXzhLH2wl8Vq5A2ygvdD8bp7iixcBHsHg7D3vlGYmrgs9Ik">
                    <div class="absolute bottom-2 left-2 bg-white/95 backdrop-blur-md px-2.5 py-1 rounded-lg flex items-center gap-1 text-[11px] font-semibold text-primary shadow-sm">
                        <span class="material-symbols-outlined text-[14px]">restaurant</span>
                        <span>Sajian Asli Takoyaki Nusantara</span>
                    </div>
                </div>

                <blockquote class="bg-surface-container p-5 rounded-2xl shadow-sm relative overflow-hidden">
                    <span class="material-symbols-outlined text-outline-variant text-[60px] absolute -right-2 -bottom-2 opacity-40">format_quote</span>
                    <p class="text-[15px] italic relative z-10 leading-snug text-on-surface">
                        "Kami ingin setiap butir takoyaki tidak hanya memanjakan lidah, tapi juga menghadirkan kebahagiaan dan kehangatan tradisi dua budaya dalam satu gigitan renyah."
                    </p>
                    <div class="mt-4 flex items-center gap-3 relative z-10">
                        <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-on-primary font-bold text-[13px]">TN</div>
                        <div class="leading-tight">
                            <p class="text-[12px] font-bold">Founder & Head Chef</p>
                            <p class="text-[11px] text-on-surface-variant">Takoyaki Nusantara Team</p>
                        </div>
                    </div>
                </blockquote>
            </div>

            {{-- Timeline Milestones --}}
            <div class="lg:col-span-7 flex flex-col justify-center">
                <div class="bg-surface-container-low p-6 md:p-8 rounded-2xl">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-[20px] font-bold text-on-surface">Peta Perjalanan (Milestones)</h3>
                        <span class="text-[10px] bg-surface-container-highest text-on-surface-variant px-2 py-1 rounded-full uppercase tracking-wider font-semibold">2020 — 2025</span>
                    </div>

                    @php
                        $timeline = [
                            ['yr'=>'20', 'color'=>'primary',   'year'=>'Tahun 2020 • Yogyakarta',      'badge'=>'Awal Mula',            'title'=>'Gerobak Pertama & Formula Rasa',        'desc'=>'Eksperimen pertama adonan krispi lembut berpadu rempah Nusantara di kawasan mahasiswa Yogyakarta.'],
                            ['yr'=>'21', 'color'=>'secondary', 'year'=>'Tahun 2021 • Digital Viral',   'badge'=>'Ekspansi 10 Outlet',   'title'=>'Viral di GoFood & ShopeeFood',           'desc'=>'Merambah platform online dengan rating 4.9. Ekspansi ke 10 cabang di Solo & Semarang.'],
                            ['yr'=>'22', 'color'=>'tertiary',  'year'=>'Tahun 2022 • Central Kitchen', 'badge'=>'Sertifikasi Halal',    'title'=>'Standarisasi Dapur Sentral & Halal',     'desc'=>'Mendirikan central kitchen bersertifikat halal untuk menjamin rasa & higienitas seluruh cabang.'],
                            ['yr'=>'23', 'color'=>'primary-container','year'=>'Tahun 2023 • Skala Nasional','badge'=>'35 Outlet',       'title'=>'Peluncuran Kemitraan Booth Terpadu',    'desc'=>'Membuka kemitraan franchise modern. Penetrasi Jabodetabek, Surabaya, dan Malang.'],
                            ['yr'=>'••', 'color'=>'surface-tint','year'=>'2024 — Sekarang • Lintas Pulau','badge'=>'50+ Gerai',       'title'=>'50+ Outlet & Produksi 500k Butir/Bulan','desc'=>'Menjangkau Jawa, Bali, Sumatra. Dipercaya 500k+ penikmat takoyaki tiap bulan.'],
                        ];
                    @endphp

                    <div class="space-y-6 relative">
                        @foreach($timeline as $i => $t)
                            <div class="flex items-start gap-4">
                                <div class="flex flex-col items-center shrink-0">
                                    <div class="w-10 h-10 rounded-full bg-{{ $t['color'] }} text-on-primary flex items-center justify-center font-bold text-[12px] shadow-sm">
                                        {{ $t['yr'] }}
                                    </div>
                                    @if(!$loop->last)
                                        <div class="w-0.5 h-16 bg-outline-variant/60 mt-2"></div>
                                    @endif
                                </div>
                                <div class="bg-surface-container-lowest p-4 rounded-xl shadow-sm w-full">
                                    <div class="flex flex-wrap items-center justify-between gap-2">
                                        <span class="text-[11px] text-primary font-bold">{{ $t['year'] }}</span>
                                        <span class="text-[10px] bg-surface-container text-on-surface-variant px-2 py-0.5 rounded font-semibold">{{ $t['badge'] }}</span>
                                    </div>
                                    <h4 class="text-[15px] font-bold text-on-surface mt-1">{{ $t['title'] }}</h4>
                                    <p class="text-[12px] text-on-surface-variant mt-1 leading-relaxed">{{ $t['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>