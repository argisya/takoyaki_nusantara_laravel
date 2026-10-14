<section class="w-full py-16 lg:py-20 bg-surface-container-low" id="keunikan">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <x-section-header
            label="Filosofi Masakan"
            title="Mengapa Takoyaki Kami Berbeda?"
            subtitle="Setiap butir takoyaki melewati 4 pilar standar kualitas ketat yang membedakan kami dari jajanan kaki lima biasa." />

        @php
            $pillars = [
                ['icon'=>'skillet',            'badge'=>'Pilar 01','title'=>'Golden Crust Adonan Rahasia','desc'=>'Dipanggang wajan besi cor bersuhu tinggi menghasilkan tekstur luar super garing, dalam lembut meleleh gurih.','check'=>'Krispi Renyah 30 Menit','color'=>'primary'],
                ['icon'=>'phishing',           'badge'=>'Pilar 02','title'=>'100% Potongan Gurita Asli','desc'=>'Menolak adonan tepung kosong atau sosis murah. Setiap takoyaki diisi tentakel gurita asli kenyal empuk.','check'=>'Dipotong Segar Harian','color'=>'secondary'],
                ['icon'=>'soup_kitchen',       'badge'=>'Pilar 03','title'=>'Fusion Saus Nusantara & Tare','desc'=>'Saus tare khas Jepang dipadu inovasi bumbu lokal: Sambal Matah, Pedas Balado, dan Saus Mentai bakar.','check'=>'Kaya Rempah, Pas di Lidah','color'=>'primary'],
                ['icon'=>'air',                'badge'=>'Pilar 04','title'=>'Katsuobushi Grade Premium','desc'=>'Serpihan cakalang asap pilihan kualitas ekspor, harum & menari aktif di atas takoyaki panas.','check'=>'Porsi Taburan Melimpah','color'=>'tertiary'],
            ];

            // Kelas warna ditulis literal agar ter-generate Tailwind (tidak boleh dinamis).
            $tone = [
                'primary'   => ['soft' => 'bg-primary/10 text-primary',     'text' => 'text-primary'],
                'secondary' => ['soft' => 'bg-secondary/10 text-secondary', 'text' => 'text-secondary'],
                'tertiary'  => ['soft' => 'bg-tertiary/10 text-tertiary',   'text' => 'text-tertiary'],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($pillars as $p)
                <article class="bg-surface-container-lowest p-5 rounded-2xl shadow-sm flex flex-col justify-between hover:shadow-md transition-shadow">
                    <div>
                        <div class="w-12 h-12 rounded-xl {{ $tone[$p['color']]['soft'] }} flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-[26px]">{{ $p['icon'] }}</span>
                        </div>
                        <span class="text-[10px] bg-surface-container {{ $tone[$p['color']]['text'] }} font-bold px-2 py-0.5 rounded uppercase">{{ $p['badge'] }}</span>
                        <h3 class="text-[15px] font-bold text-on-surface mt-2 leading-snug">{{ $p['title'] }}</h3>
                        <p class="text-[12.5px] text-on-surface-variant mt-2 leading-relaxed">{{ $p['desc'] }}</p>
                    </div>
                    <div class="mt-4 pt-3 border-t border-outline-variant/40">
                        <span class="text-[11px] text-on-surface font-semibold flex items-center gap-1">
                            <span class="material-symbols-outlined text-[15px] text-tertiary">check_circle</span>
                            {{ $p['check'] }}
                        </span>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>