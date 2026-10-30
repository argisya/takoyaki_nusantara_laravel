{{-- resources/views/components/gallery/filter-bar.blade.php --}}
<section class="sticky top-[6.25rem] z-30 w-full border-y border-outline-variant/30 bg-surface-container-lowest/95 shadow-sm backdrop-blur-md md:top-[7.25rem]">
    <div class="mx-auto flex max-w-[1280px] flex-col items-center justify-between gap-4 px-margin py-3.5 md:flex-row md:px-margin-tablet lg:px-margin-desktop">

        <div class="no-scrollbar flex w-full items-center gap-2 overflow-x-auto pb-1 md:w-auto md:pb-0" id="filter-container">
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
                        class="flex items-center gap-1.5 whitespace-nowrap rounded-full px-5 py-2 font-semibold text-[12px] transition-all
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

        <div class="relative w-full shrink-0 md:w-64">
            <span class="material-symbols-outlined absolute left-3 top-2.5 text-on-surface-variant/60 text-[18px]">search</span>
            <input id="gallery-search-input"
                   class="w-full rounded-xl border border-transparent bg-surface-container py-2 pl-9 pr-3 text-[13px] text-on-surface outline-none transition-all focus:border-primary/30 focus:ring-2 focus:ring-primary/20"
                   placeholder="Cari kegiatan/kota..." type="text">
        </div>
    </div>
</section>