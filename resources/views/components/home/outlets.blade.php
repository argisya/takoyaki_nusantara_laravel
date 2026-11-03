<section class="w-full py-14 lg:py-20 bg-surface-container-low" id="outlet">
    <div class="max-w-[1280px] w-full mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <x-section-header
            align="left"
            label="Jaringan Cabang"
            title="Temukan Outlet di Kotamu"
            subtitle="Hadir di 7 cabang aktif di berbagai lokasi strategis." />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @php
                $outlets = [
                    ['city'=>'Bogor', 'name'=>'Outlet Karadenan', 'addr'=>'Jl. Karadenan, Cibinong, Bogor', 'hours'=>'10:00 - 22:00', 'gmap'=>'https://share.google/EjkRdyZV7EiYY9Yam'],
                    ['city'=>'Bogor', 'name'=>'Outlet Cibinong',  'addr'=>'Kawasan Cibinong, Bogor',         'hours'=>'10:00 - 22:00', 'gmap'=>'https://share.google/GXsDqq3gdomiVwrSg'],
                    ['city'=>'Bogor', 'name'=>'Outlet VBI',       'addr'=>'Villa Bogor Indah, Bogor',        'hours'=>'10:00 - 22:00', 'gmap'=>'https://share.google/azVmC5WGuvOdTqINB'],
                    ['city'=>'Bogor', 'name'=>'Outlet UIKA',      'addr'=>'Area Kampus UIKA, Jl. KH. Sholeh Iskandar, Bogor', 'hours'=>'10:00 - 22:00', 'gmap'=>'https://share.google/demaeMWjiKB8vn8YK'],
                ];
            @endphp

            @foreach($outlets as $o)
                <x-outlet-card :city="$o['city']" :name="$o['name']" :addr="$o['addr']" :hours="$o['hours']" :gmap="$o['gmap']" />
            @endforeach
        </div>

        <div class="mt-8 text-center">
            <a href="{{ route('outlets') }}" class="inline-flex items-center gap-2 px-6 py-3 bg-surface-container-lowest hover:bg-surface-container text-primary font-bold rounded-xl border border-outline-variant/40 shadow-sm transition-all text-[13.5px]">
                <span>Lihat Seluruh 7 Cabang Takoyaki Nusantara</span>
                <span class="material-symbols-outlined text-[18px]">arrow_forward</span>
            </a>
        </div>
    </div>
</section>