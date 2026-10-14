<section class="w-full py-16 lg:py-20 bg-surface-container-low">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <x-section-header
            label="Komitmen Utama"
            title="Nilai yang Selalu Kami Pegang Teguh"
            subtitle="Pondasi yang membuat Takoyaki Nusantara dipercaya ratusan ribu pelanggan dan puluhan mitra bisnis." />

        @php
            $values = [
                ['icon'=>'verified',    'title'=>'Halal & Thayyib',              'desc'=>'100% bebas mirin, sake, dan bahan non-halal. Terdaftar LPPOM MUI dan BPJPH.',            'tag'=>'Tanpa Kompromi',    'color'=>'tertiary'],
                ['icon'=>'award_star',  'title'=>'Konsistensi Kualitas',         'desc'=>'SOP penimbangan adonan terstandar dengan central kitchen — Jakarta selezat Bali.',       'tag'=>'Standarisasi SOP',  'color'=>'primary'],
                ['icon'=>'savings',     'title'=>'Bintang Lima, Harga Sahabat',  'desc'=>'Makanan autentik berkualitas tidak harus mahal. Porsi mengenyangkan, harga terjangkau.','tag'=>'Jujur & Bersahabat','color'=>'secondary'],
                ['icon'=>'handshake',   'title'=>'Tumbuh Bersama Mitra',         'desc'=>'Kemitraan transparan tanpa royalti tersembunyi, dengan pendampingan operasional.',      'tag'=>'Kemitraan Terbuka', 'color'=>'primary'],
            ];

            // Kelas warna ditulis literal agar ter-generate Tailwind (tidak boleh dinamis).
            $tone = [
                'primary'   => ['soft' => 'bg-primary/10 text-primary',     'text' => 'text-primary'],
                'secondary' => ['soft' => 'bg-secondary/10 text-secondary', 'text' => 'text-secondary'],
                'tertiary'  => ['soft' => 'bg-tertiary/10 text-tertiary',   'text' => 'text-tertiary'],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($values as $v)
                <article class="bg-surface-container-lowest p-5 rounded-2xl shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-12 h-12 rounded-xl {{ $tone[$v['color']]['soft'] }} flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-[26px]">{{ $v['icon'] }}</span>
                        </div>
                        <h3 class="text-[15px] font-bold text-on-surface">{{ $v['title'] }}</h3>
                        <p class="text-[12.5px] text-on-surface-variant mt-2 leading-relaxed">{{ $v['desc'] }}</p>
                    </div>
                    <div class="mt-4 pt-3">
                        <span class="text-[10px] {{ $tone[$v['color']]['text'] }} font-bold uppercase tracking-wider">{{ $v['tag'] }}</span>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>