<section class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-16">
    <div class="flex flex-col gap-10">

        <x-section-header
            label="Mudah & Higienis"
            title="3 Langkah Menikmati Takoyaki Hangat"
            subtitle="Pengalaman makan takoyaki kualitas resto Jepang dengan kepraktisan pemesanan digital." />

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            @php
                $steps = [
                    ['no'=>'01','icon'=>'format_list_bulleted','title'=>'Pilih Ukuran Paket','desc'=>'Pilih porsi dari 4 butir cicip, 6 reguler, 10 sharing, atau 16 party box sesuai momenmu.','color'=>'primary'],
                    ['no'=>'02','icon'=>'liquor','title'=>'Pilih Saus & Topping','desc'=>'Rasa Tare Klasik Osaka, pedas segar Sambal Matah Bali, atau lelehan Mentai Torched creamy.','color'=>'secondary'],
                    ['no'=>'03','icon'=>'lunch_dining','title'=>'Pesan & Santap Hangat','desc'=>'Pesan lewat GoFood/ShopeeFood/GrabFood atau kunjungi booth terdekat. Box ventilasi anti-melempem!','color'=>'tertiary'],
                ];
            @endphp
            @foreach($steps as $s)
                <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col gap-3 relative">
                    <span class="absolute top-3 right-4 font-black text-[48px] text-surface-container-highest/70 select-none leading-none">{{ $s['no'] }}</span>
                    <div class="w-12 h-12 rounded-xl bg-{{ $s['color'] }}/10 text-{{ $s['color'] }} flex items-center justify-center">
                        <span class="material-symbols-outlined text-[26px]">{{ $s['icon'] }}</span>
                    </div>
                    <h3 class="text-[15px] font-bold text-on-surface">{{ $s['title'] }}</h3>
                    <p class="text-[12.5px] text-on-surface-variant leading-relaxed">{{ $s['desc'] }}</p>
                </div>
            @endforeach
        </div>

        {{-- Packaging Guarantee --}}
        <div class="bg-surface-container-high/60 rounded-2xl p-6 flex flex-col md:flex-row items-center justify-between gap-5">
            <div class="flex items-center gap-4">
                <div class="w-16 h-16 rounded-2xl bg-surface-container-lowest text-primary flex items-center justify-center shadow-sm shrink-0">
                    <span class="material-symbols-outlined text-[32px]">format_image_left</span>
                </div>
                <div class="flex flex-col">
                    <h4 class="text-[15px] font-bold text-on-surface">Garansi Kemasan "Krispi Terjaga 30 Menit"</h4>
                    <p class="text-[12px] text-on-surface-variant leading-relaxed mt-1">
                        Setiap takoyaki dipacking dengan kardus ramah lingkungan <strong class="text-on-surface">Ventilated Food Grade</strong> untuk menjaga uap panas keluar teratur tanpa membuat kulit takoyaki lembek selama pengiriman.
                    </p>
                </div>
            </div>
            <div class="flex items-center gap-2 shrink-0 bg-surface-container-lowest px-4 py-2 rounded-xl">
                <span class="material-symbols-outlined text-tertiary text-[18px]">eco</span>
                <span class="text-[11px] font-bold">100% Biodegradable</span>
            </div>
        </div>
    </div>
</section>