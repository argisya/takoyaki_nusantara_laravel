<section class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-16" id="sauce-selector">
    <div class="bg-surface-container-high/40 rounded-3xl p-6 md:p-10">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-6">
            <div class="flex flex-col gap-2">
                <span class="text-[10px] text-secondary font-bold tracking-widest uppercase">Kreasi Sesuai Selera</span>
                <h2 class="text-[26px] lg:text-[32px] font-bold tracking-tight">Kustomisasi Saus & Topping Juara</h2>
                <p class="text-[13.5px] text-on-surface-variant max-w-2xl">
                    Tiap butir Takoyaki Nusantara memiliki dasar adonan gurita yang sama, namun Anda bebas mengeksplorasi rasa melalui aneka saus khas Jepang maupun rempah Nusantara.
                </p>
            </div>
            <span class="bg-tertiary-container/15 text-tertiary px-4 py-1.5 rounded-full text-[11px] font-bold flex items-center gap-1.5 w-fit">
                <span class="material-symbols-outlined text-[15px]">soup_kitchen</span>
                Bebas Mix & Match
            </span>
        </div>

        @php
            $sauces = [
                ['icon'=>'ramen_dining','title'=>'Saus Tare Osaka',       'desc'=>'Kecap manis gurih beraroma kaldu dashi dan jahe segar, resep klasik Dotonbori.','price'=>'GRATIS', 'free'=>true,  'color'=>'primary'],
                ['icon'=>'waves',       'title'=>'Katsuobushi Grade A',   'desc'=>'Serutan cakalang asap tebal kualitas ekspor. Menari-nari hangat dengan wangi asap kayu.','price'=>'GRATIS','free'=>true,'color'=>'secondary'],
                ['icon'=>'grass',       'title'=>'Spicy Mayo & Nori',     'desc'=>'Mayones Jepang gurih dengan sentuhan cabai lembut, ditaburi remahan rumput laut panggang.','price'=>'GRATIS','free'=>true,'color'=>'primary'],
                ['icon'=>'local_fire_department','title'=>'Sambal Matah Bali','desc'=>'Irisan serai wangi, kecombrang, bawang merah, cabai rawit segar, dan minyak kelapa murni.','price'=>'+Rp 3.000','free'=>false,'color'=>'primary-container','featured'=>true],
                ['icon'=>'whatshot',    'title'=>'Torched Mentai Tobiko', 'desc'=>'Saus mentai berbutir telur ikan terbang dibakar dengan torch, aroma smoky karamel.','price'=>'+Rp 4.000','free'=>false,'color'=>'secondary'],
                ['icon'=>'bakery_dining','title'=>'Mozzarella Cheese Melt','desc'=>'Lelehan keju mozzarella molor creamy, diselimutkan tebal di atas bola takoyaki panas.','price'=>'+Rp 5.000','free'=>false,'color'=>'secondary-container'],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
            @foreach($sauces as $s)
                <div class="bg-surface-container-lowest p-4 rounded-2xl shadow-sm flex items-start gap-4">
                    <div class="w-14 h-14 rounded-xl bg-{{ $s['color'] }}/10 text-{{ $s['color'] }} flex items-center justify-center shrink-0">
                        <span class="material-symbols-outlined text-[28px]">{{ $s['icon'] }}</span>
                    </div>
                    <div class="flex flex-col gap-1 flex-1">
                        <div class="flex items-center justify-between gap-2 flex-wrap">
                            <div class="flex items-center gap-1">
                                <h4 class="text-[14.5px] font-bold text-on-surface">{{ $s['title'] }}</h4>
                                @if(!empty($s['featured']))
                                    <span class="material-symbols-outlined text-primary text-[15px]">verified</span>
                                @endif
                            </div>
                            <span class="{{ $s['free'] ? 'bg-tertiary-container/10 text-tertiary' : 'bg-surface-container-high text-on-surface' }} text-[10px] px-2 py-0.5 rounded-full font-bold">
                                {{ $s['price'] }}
                            </span>
                        </div>
                        <p class="text-[12px] text-on-surface-variant leading-relaxed">{{ $s['desc'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>