<section class="w-full py-14 lg:py-20 bg-surface" id="keunggulan">
    <div class="max-w-[1280px] w-full mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <x-section-header 
            label="Kelezatan & Nilai Mutu"
            title="Keunggulan Kami"
            subtitle="Kualitas rasa dan inovasi produk yang selalu relevan dengan selera pasar." />

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @php
                $items = [
                    ['icon'=>'skillet',      'title'=>'CRISPY DI LUAR',      'desc'=>'Tekstur luar yang crispy memberikan sensasi renyah pada setiap gigitan.'],
                    ['icon'=>'bakery_dining','title'=>'CREAMY DI DALAM',     'desc'=>'Bagian dalam yang lembut dan creamy menjadi salah satu karakter khas Takoyaki Nusantara.'],
                    ['icon'=>'trending_up',  'title'=>'RELEVAN DENGAN PASAR','desc'=>'Produk terus dikembangkan dengan memperhatikan selera, kebutuhan, dan perkembangan tren pasar.'],
                ];
            @endphp

            @foreach($items as $f)
                <div class="bg-surface-container-low hover:bg-surface-container-lowest rounded-2xl p-6 flex flex-col gap-4 transition-all shadow-sm hover:shadow-md group">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center
                                group-hover:bg-primary group-hover:text-on-primary transition-colors">
                        <span class="material-symbols-outlined text-[28px]">{{ $f['icon'] }}</span>
                    </div>
                    <div class="flex flex-col gap-2">
                        <h3 class="font-bold text-[18px] text-on-surface tracking-tight">{{ $f['title'] }}</h3>
                        <p class="text-[14px] text-on-surface-variant leading-relaxed">{{ $f['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>