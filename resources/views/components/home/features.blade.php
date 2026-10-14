<section class="w-full py-14 lg:py-20 bg-surface" id="keunggulan">
    <div class="max-w-[1280px] w-full mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <x-section-header 
            label="Kelezatan Tanpa Kompromi"
            title="Kenapa Harus Takoyaki Nusantara?"
            subtitle="Kualitas street food bintang lima dengan harga bersahabat." />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 lg:gap-5">
            @php
                $items = [
                    ['icon'=>'set_meal',    'title'=>'Bahan Premium & Segar',    'desc'=>'Gurita asli, keju mozarella, sosis sapi impor berkualitas prima.'],
                    ['icon'=>'soup_kitchen','title'=>'Fusion Rasa Unik',         'desc'=>'Saus mentai, sambal matah Bali, balado nusantara, dan tare Jepang.'],
                    ['icon'=>'cookie',      'title'=>'Krispi Luar, Lembut Dalam','desc'=>'Dipanggang dengan wajan besi cor tradisional Osaka.'],
                    ['icon'=>'sanitizer',   'title'=>'Higienis & Halal',         'desc'=>'Dapur live-cooking transparan, tanpa bahan pengawet.'],
                ];
            @endphp

            @foreach($items as $f)
                <div class="bg-surface-container-low hover:bg-surface-container-lowest rounded-2xl p-5 flex flex-col gap-4 transition-all shadow-sm hover:shadow-md group">
                    <div class="w-14 h-14 rounded-2xl bg-primary/10 text-primary flex items-center justify-center
                                group-hover:bg-primary group-hover:text-on-primary transition-colors">
                        <span class="material-symbols-outlined text-[28px]">{{ $f['icon'] }}</span>
                    </div>
                    <div class="flex flex-col gap-1.5">
                        <h3 class="font-bold text-[17px] text-on-surface">{{ $f['title'] }}</h3>
                        <p class="text-[13.5px] text-on-surface-variant leading-relaxed">{{ $f['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>