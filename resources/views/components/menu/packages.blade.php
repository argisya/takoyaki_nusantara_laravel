<section class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop pt-6 pb-3" id="daftar-paket">
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-6">
        <div class="flex flex-col gap-2">
            <span class="text-[10px] text-primary font-bold tracking-widest uppercase">Pilihan Porsi Lengkap</span>
            <h2 class="text-[26px] lg:text-[32px] font-bold tracking-tight">Katalog Paket Takoyaki</h2>
            <p class="text-[13.5px] text-on-surface-variant max-w-2xl">
                Rasa dan kualitas isian sama mewahnya. Tentukan porsi yang pas untuk ngemil santai, makan siang, sampai pesta bersama keluarga.
            </p>
        </div>
        <div class="bg-surface-container-high px-3 py-1.5 rounded-xl flex items-center gap-2 text-on-surface-variant max-w-xs">
            <span class="material-symbols-outlined text-primary text-[16px]">info</span>
            <span class="text-[11px]">Semua paket termasuk Saus Tare + Katsuobushi melimpah</span>
        </div>
    </div>

    @php
        $packages = [
            [
                'id'=>'cicip', 'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuC6tknuJ7ZiZabuwFLtA2MH8zphVSuM1_cYHQdzm79vI3F-rxLRY7qE0HpbUVBgb0BMJePCqZUbW9NQ0HlqWx7so7A21btXBsWFu8dkBJjiwVefXTMfP8Nyb3Z-WoIl1cRMk5Ms-WkZaKrCpI3p8kKdrSlPpKHcOMD9DnUgCwaprlmVkqqS4oYwPBG0BhEvzmXxu8VjIiPgpJtKUyRCdQ6wFHOPUDGGISUJNqH2jUljrHwbfmJEDLV0',
                'badge'=>'Porsi Cicip', 'badgeStyle'=>'bg-white/90 text-on-surface-variant',
                'pill'=>'4 Butir', 'name'=>'Paket Cicip Solo',
                'desc'=>'Porsi pas untuk santap solo atau pengganjal lapar sore.',
                'noteIcon'=>'check_circle', 'noteText'=>'Free Tare Klasik + Mayo + Bonito',
                'price'=>'15.000', 'perButir'=>'Rp 3.750 / butir', 'strike'=>null,
                'cta'=>'Pilih Paket Ini', 'highlight'=>false,
            ],
            [
                'id'=>'reguler', 'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuBfGvCcH1s9LOfRXE05OohDbclNiODPxQnomGJ2O3k4tLGfRpTm_K7DJ1nwqijwVwy9WMgiA13VtHejjmMQvapIgbT3GQ8CMP_llGABPW8u_w1Gfgn4lu9mY0pCrY6JVp-VButfBGD0bkWbluNo62SvDT_JdSyFRVbdSBJ2AjIAAQpvJJ8iSy13lN3iE6HWZpwnm0ko4Aov5weY18Qu914cpQndBmk1s4Yvc6x2NxwG9a8XOcteOlFP',
                'badge'=>'Hemat 9%', 'badgeStyle'=>'bg-primary text-on-primary',
                'pill'=>'6 Butir', 'name'=>'Paket Personal Reguler',
                'desc'=>'Menu paling laris! Porsi pas untuk satu orang, kenyang nikmat.',
                'noteIcon'=>'thumb_up', 'noteText'=>'Pilihan #1 Pelanggan Setia',
                'price'=>'20.000', 'perButir'=>'Rp 3.333 / butir', 'strike'=>'Rp 22.000',
                'cta'=>'Pilih Paket Ini', 'highlight'=>true, 'ribbon'=>'TERPOPULER • BEST VALUE',
            ],
            [
                'id'=>'sharing', 'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuBUD3Ce8RvO2iAPWatciFHGcRs0WqG5w55Kw1basq7FtZK8UUzuvmU_UvCbCtYkH3zA6wTc9IjeLoZ0c61RRtbAP-thlydCkqMqWTlcCO_KeVUsY7mWKQELKwAf59am53gRq8sramEU_sWDKAWcEo1Pm-uo1MnsEAq21y3EZIdTmSaQVSAzurNw3vXJx22UtL9w2V2FQsAgZtPz5QVCZvlOp8Epz5T6nNEGpQYmfc-18gwMq1u_NM8t',
                'badge'=>'Hemat Rp 5.000', 'badgeStyle'=>'bg-tertiary text-on-tertiary',
                'pill'=>'10 Butir', 'name'=>'Paket Sharing Berdua',
                'desc'=>'Puas berdua atau traktiran seru bareng sahabat saat ngobrol sore.',
                'noteIcon'=>'group', 'noteText'=>'Bisa split 2 rasa topping saus',
                'price'=>'35.000', 'perButir'=>'Rp 3.500 / butir', 'strike'=>'Rp 40.000',
                'cta'=>'Pilih Paket Ini', 'highlight'=>false,
            ],
            [
                'id'=>'party', 'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuBCCUgvf0wqr_8o47AI8heemsHfpXx7ttUhYeoYhfWFqz9uhN7YxGSXssfo1TgHin1caM7BmvK2WrNp7OniKuQyypltoK1W8XJxkewxxOhHJ6bqStYzEOG-dqGlU51GFQkTuspD56ossM1FSbFZGqt0P7qlRmzM9AOHI1EbuaUL28P3WEAgsPrd9oWgd0tGAsNVk-Pt1EBajkrM4oYN4SnsPRFoWDVdMVzZuUJWW6H0ED9E8btVlJuu',
                'badge'=>'Spesial Box', 'badgeStyle'=>'bg-primary-container text-on-primary-container',
                'pill'=>'16 Butir Box', 'name'=>'Paket Keluarga Pesta',
                'desc'=>'Box eksklusif ventilasi khusus. Sajian mewah untuk kumpul keluarga & acara.',
                'noteIcon'=>'celebration', 'noteText'=>'Bonus Box Eksklusif & Sumpit Kayu',
                'price'=>'55.000', 'perButir'=>'Super Hemat Rp 10.000', 'strike'=>'Rp 65.000',
                'cta'=>'Pilih Paket Ini', 'highlight'=>false,
            ],
        ];
    @endphp

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
        @foreach($packages as $p)
            <article class="bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-xl transition-all duration-300 flex flex-col overflow-hidden relative group {{ $p['highlight'] ? 'shadow-md lg:-translate-y-2' : '' }}">
                @if(!empty($p['ribbon']))
                    <div class="bg-secondary text-on-secondary text-center py-1 text-[10px] tracking-widest uppercase font-bold flex items-center justify-center gap-1">
                        <span class="material-symbols-outlined text-[13px]">stars</span>
                        <span>{{ $p['ribbon'] }}</span>
                    </div>
                @endif

                <div class="relative h-48 overflow-hidden bg-surface-container">
                    <img src="{{ $p['img'] }}" alt="{{ $p['name'] }}" loading="lazy"
                         class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-105">
                    <div class="absolute top-3 left-3 {{ $p['badgeStyle'] }} px-2.5 py-0.5 rounded-full shadow-sm">
                        <span class="text-[10px] font-bold uppercase">{{ $p['badge'] }}</span>
                    </div>
                    <div class="absolute bottom-3 right-3 bg-black/75 backdrop-blur-sm px-2.5 py-0.5 rounded-md text-white">
                        <span class="text-[10px] font-bold">{{ $p['pill'] }}</span>
                    </div>
                </div>

                <div class="p-4 flex flex-col flex-1 justify-between gap-4">
                    <div class="flex flex-col gap-2">
                        <h3 class="text-[16px] font-bold text-on-surface">{{ $p['name'] }}</h3>
                        <p class="text-[12.5px] text-on-surface-variant leading-relaxed">{{ $p['desc'] }}</p>

                        <div class="bg-surface-container-low p-2 rounded-lg mt-1 flex items-center gap-2">
                            <span class="material-symbols-outlined text-tertiary text-[15px]">{{ $p['noteIcon'] }}</span>
                            <span class="text-[11px] text-on-surface-variant">{{ $p['noteText'] }}</span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-3">
                        <div class="flex items-baseline justify-between">
                            <div>
                                <div class="flex items-center gap-2 flex-wrap">
                                    <span class="text-[20px] text-primary font-bold">Rp {{ $p['price'] }}</span>
                                    @if($p['strike'])
                                        <span class="line-through text-on-surface-variant text-[12px]">{{ $p['strike'] }}</span>
                                    @endif
                                </div>
                                <span class="text-[11px] text-on-surface-variant block">{{ $p['perButir'] }}</span>
                            </div>
                        </div>

                        <button type="button"
                                onclick="selectPackageEstimator('{{ $p['id'] }}', {{ (int) str_replace('.', '', $p['price']) }}, '{{ $p['name'] }} ({{ $p['pill'] }})')"
                                class="w-full {{ $p['highlight'] ? 'bg-primary hover:bg-primary-container text-on-primary shadow-md' : 'bg-surface-container-high hover:bg-primary hover:text-on-primary text-on-surface' }} font-semibold text-[12.5px] py-2.5 rounded-xl transition-all flex items-center justify-center gap-2">
                            <span class="material-symbols-outlined text-[16px]">add_shopping_cart</span>
                            <span>{{ $p['cta'] }}</span>
                        </button>
                    </div>
                </div>
            </article>
        @endforeach
    </div>
</section>