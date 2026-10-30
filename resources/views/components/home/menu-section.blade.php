<section class="w-full py-14 lg:py-20 bg-surface-container-low" id="menu-populer">
    <div class="max-w-[1280px] w-full mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <x-section-header 
            label="Menu Andalan"
            title="Katalog Menu Utama"
            subtitle="Takoyaki lezat dalam pilihan ukuran Size S, M, L dan Okonomiyaki autentik." />

        @php
            $menus = [
                ['img'=>asset('images/produk-4.webp'), 'badge'=>'Size S','name'=>'Takoyaki Size S','desc'=>'Porsi personal renyah dan nikmat dengan taburan katsuobushi serta saus gurih khas.','price'=>'15.000','rating'=>'4.9'],
                ['img'=>asset('images/produk-5.webp'), 'badge'=>'Best Seller','name'=>'Takoyaki Size M','desc'=>'Porsi favorit paling pas! Lembut creamy di dalam, crispy keemasan di luar.','price'=>'20.000','rating'=>'4.9'],
                ['img'=>asset('images/produk-1.webp'), 'badge'=>'Size L','name'=>'Takoyaki Size L','desc'=>'Porsi puas cocok untuk dinikmati bersama teman atau keluarga dengan saus melimpah.','price'=>'30.000','rating'=>'4.9'],
                ['img'=>asset('images/produk-2.webp'), 'badge'=>'Spesial','name'=>'Okonomiyaki','desc'=>'Pancake gurih ala Jepang dengan isian sayuran segar, racikan bumbu spesial, mayones & katsuobushi.','price'=>'25.000','rating'=>'4.8'],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-5">
            @foreach($menus as $m)
                <x-menu-card 
                    :img="$m['img']" :badge="$m['badge']" :name="$m['name']"
                    :desc="$m['desc']" :price="$m['price']" :rating="$m['rating']" />
            @endforeach
        </div>
    </div>
</section>