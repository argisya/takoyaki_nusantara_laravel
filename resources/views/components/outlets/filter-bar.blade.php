<section class="w-full sticky top-16 md:top-20 z-30 bg-surface/95 backdrop-blur-md py-3 shadow-sm transition-all border-y border-outline-variant/30">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="flex flex-col md:flex-row items-stretch md:items-center justify-between gap-3">

            {{-- Search --}}
            <div class="relative flex-1 min-w-[240px]">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-on-surface-variant text-[20px]">search</span>
                <input id="outlet-search-input"
                       class="w-full pl-11 pr-4 py-2.5 bg-surface-container-lowest text-on-surface rounded-xl shadow-sm text-[13.5px] placeholder:text-on-surface-variant/70 focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all"
                       placeholder="Cari nama kota, mall, atau jalan cabang..." type="text">
                <button id="clear-search-btn" class="hidden absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant hover:text-on-surface">
                    <span class="material-symbols-outlined text-[18px]">cancel</span>
                </button>
            </div>

            {{-- City chips --}}
            <div class="flex items-center gap-2 overflow-x-auto pb-1 md:pb-0 shrink-0 no-scrollbar" id="city-filter-group">
                @php
                    $cities = [
                        ['key'=>'all',       'label'=>'Semua Kota (50+)'],
                        ['key'=>'jakarta',   'label'=>'Jakarta (18)'],
                        ['key'=>'bandung',   'label'=>'Bandung (10)'],
                        ['key'=>'yogyakarta','label'=>'Yogyakarta (8)'],
                        ['key'=>'surabaya',  'label'=>'Surabaya (8)'],
                        ['key'=>'bali',      'label'=>'Bali (5)'],
                    ];
                @endphp
                @foreach($cities as $i => $c)
                    <button class="city-btn px-4 py-2 rounded-full text-[12px] whitespace-nowrap transition-all font-semibold
                                   {{ $i === 0
                                      ? 'bg-primary text-on-primary shadow-sm'
                                      : 'bg-surface-container text-on-surface-variant hover:bg-surface-container-high' }}"
                            data-city="{{ $c['key'] }}">{{ $c['label'] }}</button>
                @endforeach
            </div>

            {{-- Open toggle --}}
            <label class="flex items-center gap-2 cursor-pointer select-none shrink-0 px-3 py-2 bg-surface-container-lowest rounded-xl shadow-sm">
                <input id="open-only-toggle" type="checkbox" class="sr-only peer">
                <div class="relative w-9 h-5 bg-surface-variant rounded-full peer-checked:bg-tertiary transition-colors after:content-[''] after:absolute after:top-0.5 after:left-0.5 after:bg-white after:rounded-full after:h-4 after:w-4 after:transition-all peer-checked:after:translate-x-4"></div>
                <span class="text-[11.5px] text-on-surface flex items-center gap-1.5 font-semibold">
                    <span class="w-2 h-2 rounded-full bg-tertiary inline-block animate-pulse"></span>
                    Buka Sekarang
                </span>
            </label>
        </div>
    </div>
</section>