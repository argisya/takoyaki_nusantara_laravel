<section class="w-full py-14 lg:py-20 bg-surface-container-low" id="outlet">
    <div class="max-w-[1280px] w-full mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <x-section-header
            align="left"
            label="Jaringan Cabang"
            title="Temukan Outlet di Kotamu"
            subtitle="Hadir di 50+ lokasi strategis di 12 kota besar." />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5">
            @php
                $outlets = [
                    ['city'=>'Jakarta Selatan','name'=>'Outlet Tebet Raya','addr'=>'Jl. Tebet Raya No. 42B','hours'=>'10:00 - 22:00'],
                    ['city'=>'Bandung',        'name'=>'Outlet Dipati Ukur','addr'=>'Jl. Dipati Ukur No. 88','hours'=>'10:00 - 22:00'],
                    ['city'=>'Yogyakarta',     'name'=>'Outlet Malioboro',  'addr'=>'Jl. Malioboro No. 115','hours'=>'10:00 - 23:00'],
                    ['city'=>'Surabaya',       'name'=>'Outlet Manyar',     'addr'=>'Jl. Manyar Kertoarjo 54','hours'=>'10:00 - 22:00'],
                ];
            @endphp

            @foreach($outlets as $o)
                <x-outlet-card :city="$o['city']" :name="$o['name']" :addr="$o['addr']" :hours="$o['hours']" />
            @endforeach
        </div>
    </div>
</section>