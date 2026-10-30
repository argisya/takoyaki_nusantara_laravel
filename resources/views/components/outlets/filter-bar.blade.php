{{-- resources/views/components/outlets/filter-bar.blade.php --}}
<section class="sticky top-[6.25rem] z-30 w-full border-y border-outline-variant/30 bg-surface/95 py-3 shadow-sm backdrop-blur-md transition-all md:top-[7.25rem]">
    <div class="mx-auto max-w-[1280px] px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="flex flex-col items-stretch justify-between gap-3 md:flex-row md:items-center">

            {{-- Input Pencarian --}}
            <div class="relative min-w-[240px] flex-1">
                <span class="material-symbols-outlined absolute left-4 top-1/2 -translate-y-1/2 text-[20px] text-on-surface-variant">search</span>
                <input id="outlet-search-input"
                       class="w-full rounded-xl bg-surface-container-lowest py-2.5 pl-11 pr-4 text-[13.5px] text-on-surface shadow-sm transition-all placeholder:text-on-surface-variant/70 focus:outline-none focus:ring-2 focus:ring-primary/20"
                       placeholder="Cari nama kota, mall, atau jalan cabang..." type="text">
                <button id="clear-search-btn" class="absolute right-3 top-1/2 hidden -translate-y-1/2 text-on-surface-variant hover:text-on-surface">
                    <span class="material-symbols-outlined text-[18px]">cancel</span>
                </button>
            </div>

            {{-- Tombol Filter Kota --}}
            <div class="no-scrollbar flex shrink-0 items-center gap-2 overflow-x-auto pb-1 md:pb-0" id="city-filter-group">
                @php
                    $cities = [
                        ['key'=>'all',        'label'=>'Semua Kota (7)'],
                        ['key'=>'jakarta',    'label'=>'Jakarta (3)'],
                        ['key'=>'bandung',    'label'=>'Bandung (1)'],
                        ['key'=>'yogyakarta', 'label'=>'Yogyakarta (1)'],
                        ['key'=>'surabaya',   'label'=>'Surabaya (1)'],
                        ['key'=>'bali',       'label'=>'Bali (1)'],
                    ];
                @endphp
                @foreach($cities as $i => $c)
                    <button type="button" class="city-btn whitespace-nowrap rounded-full px-4 py-2 font-semibold text-[12px] transition-all
                                   {{ $i === 0
                                      ? 'bg-primary text-on-primary shadow-sm'
                                      : 'bg-surface-container text-on-surface-variant hover:bg-surface-container-high' }}"
                            data-city="{{ $c['key'] }}">{{ $c['label'] }}</button>
                @endforeach
            </div>

            {{-- Toggle Filter Buka Sekarang --}}
            <label class="flex shrink-0 cursor-pointer select-none items-center gap-2 rounded-xl bg-surface-container-lowest px-3 py-2 shadow-sm">
                <input id="open-only-toggle" type="checkbox" class="sr-only peer">
                <div class="relative h-5 w-9 rounded-full bg-surface-variant transition-colors after:absolute after:left-0.5 after:top-0.5 after:h-4 after:w-4 after:rounded-full after:bg-white after:transition-all peer-checked:bg-tertiary peer-checked:after:translate-x-4"></div>
                <span class="flex items-center gap-1.5 font-semibold text-[11.5px] text-on-surface">
                    <span class="inline-block h-2 w-2 rounded-full bg-tertiary animate-pulse"></span>
                    Buka Sekarang
                </span>
            </label>
        </div>
    </div>
</section>