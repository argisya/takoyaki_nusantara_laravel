<section class="w-full bg-surface-container-lowest/95 backdrop-blur-md sticky top-16 md:top-20 z-30 shadow-sm border-y border-outline-variant/30">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-3.5 flex flex-col md:flex-row items-center justify-between gap-4">

        <div class="flex items-center gap-2 overflow-x-auto w-full md:w-auto pb-1 md:pb-0 no-scrollbar" id="filter-container">
            @php
                $filters = [
                    ['key'=>'all',       'label'=>'Semua Dokumentasi', 'icon'=>'grid_view'],
                    ['key'=>'festival',  'label'=>'Festival & Event',  'icon'=>null],
                    ['key'=>'menu',      'label'=>'Menu & Produk',     'icon'=>null],
                    ['key'=>'booth',     'label'=>'Booth & Gerai',     'icon'=>null],
                    ['key'=>'dapur',     'label'=>'Dapur Sentral',     'icon'=>null],
                    ['key'=>'pelanggan', 'label'=>'Mitra & Pelanggan', 'icon'=>null],
                ];
            @endphp

            @foreach($filters as $i => $f)
                <button type="button" data-filter="{{ $f['key'] }}"
                        class="px-5 py-2 rounded-full font-semibold text-[12px] whitespace-nowrap transition-all flex items-center gap-1.5
                               {{ $i === 0
                                  ? 'bg-primary text-on-primary shadow-sm'
                                  : 'bg-surface-container text-on-surface-variant hover:bg-surface-container-high' }}">
                    @if($f['icon'])
                        <span class="material-symbols-outlined text-[14px]">{{ $f['icon'] }}</span>
                    @endif
                    <span>{{ $f['label'] }}</span>
                </button>
            @endforeach
        </div>

        <div class="relative w-full md:w-64 shrink-0">
            <span class="material-symbols-outlined absolute left-3 top-2.5 text-on-surface-variant/60 text-[18px]">search</span>
            <input id="gallery-search-input"
                   class="w-full bg-surface-container pl-9 pr-3 py-2 rounded-xl text-[13px] text-on-surface outline-none focus:ring-2 focus:ring-primary/20 transition-all border border-transparent focus:border-primary/30"
                   placeholder="Cari kegiatan/kota..." type="text">
        </div>
    </div>
</section>