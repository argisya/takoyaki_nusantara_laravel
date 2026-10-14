<section class="w-full bg-surface-container-low py-12">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

            @php
                $stats = [
                    ['icon'=>'storefront',      'badge'=>'Sejak 2020',  'value'=>'Didirikan 2020', 'sub'=>'Perjalanan Inspiratif',   'desc'=>'Berawal dari 1 gerobak kayu Dotonbori di Yogyakarta.',  'color'=>'primary'],
                    ['icon'=>'pin_drop',        'badge'=>'12 Kota Besar','value'=>'50+ Outlet',     'sub'=>'Cakupan Nasional',       'desc'=>'Titik strategis Jawa, Bali, dan Sumatera.',              'color'=>'secondary'],
                    ['icon'=>'verified_user',   'badge'=>'Resmi Halal',  'value'=>'100% Halal',     'sub'=>'BPJPH & LPPOM MUI',      'desc'=>'Tanpa mirin, sake, atau lemak hewani haram.',            'color'=>'tertiary'],
                    ['icon'=>'set_meal',        'badge'=>'Segar Harian', 'value'=>'500k+ Butir',    'sub'=>'Perputaran Bulanan',     'desc'=>'Tako segar harian & saus racikan autentik.',             'color'=>'primary'],
                ];
            @endphp

            @foreach($stats as $s)
                <article class="bg-surface-container-lowest p-5 rounded-2xl shadow-sm border border-outline-variant/40 flex flex-col justify-between hover:shadow-md transition-shadow gap-3">
                    <div class="flex items-center justify-between">
                        <div class="w-12 h-12 rounded-xl bg-{{ $s['color'] }}/10 flex items-center justify-center text-{{ $s['color'] }}">
                            <span class="material-symbols-outlined text-[24px]">{{ $s['icon'] }}</span>
                        </div>
                        <span class="text-[10px] bg-{{ $s['color'] }}/10 text-{{ $s['color'] }} font-bold px-2 py-0.5 rounded-full">
                            {{ $s['badge'] }}
                        </span>
                    </div>
                    <div>
                        <span class="text-[22px] font-bold text-{{ $s['color'] }} tracking-tight block">{{ $s['value'] }}</span>
                        <p class="text-[12px] text-on-surface font-semibold mt-1">{{ $s['sub'] }}</p>
                        <p class="text-[12px] text-on-surface-variant mt-1 leading-relaxed">{{ $s['desc'] }}</p>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
</section>