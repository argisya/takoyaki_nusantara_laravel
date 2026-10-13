<section class="w-full bg-surface-container py-10">
    <div class="max-w-[1280px] w-full mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-3 lg:gap-5">
            @php
                $stats = [
                    ['icon'=>'storefront',       'value'=>'50+',       'label'=>'Outlet di 12 Kota',   'color'=>'primary'],
                    ['icon'=>'bakery_dining',    'value'=>'500.000+',  'label'=>'Butir Terjual/Bulan', 'color'=>'secondary'],
                    ['icon'=>'health_and_safety','value'=>'100%',      'label'=>'Halal BPJPH',         'color'=>'tertiary'],
                    ['icon'=>'grade',            'value'=>'4.9 / 5.0', 'label'=>'Rating Pembeli',      'color'=>'primary'],
                ];
            @endphp

            @foreach($stats as $s)
                <div class="bg-surface-container-lowest/80 backdrop-blur rounded-2xl p-4 flex items-center gap-3 shadow-sm">
                    <div class="w-11 h-11 rounded-xl flex items-center justify-center shrink-0
                                bg-{{ $s['color'] }}/10 text-{{ $s['color'] }}">
                        <span class="material-symbols-outlined text-[24px]" 
                              style="{{ $s['icon']==='grade' ? "font-variation-settings:'FILL' 1;" : '' }}">
                            {{ $s['icon'] }}
                        </span>
                    </div>
                    <div class="flex flex-col min-w-0">
                        <span class="font-bold text-[15px] text-on-surface truncate">{{ $s['value'] }}</span>
                        <span class="text-[11px] text-on-surface-variant truncate">{{ $s['label'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>