<section class="w-full py-6">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <div class="flex items-center justify-between mb-6 gap-3 flex-wrap">
            <div>
                <h2 class="text-[22px] font-bold text-on-surface">Katalog Booth & Lokasi Terdaftar</h2>
                <p class="text-[12.5px] text-on-surface-variant">Pilih booth untuk melihat fasilitas, navigasi Maps, atau chat langsung via WhatsApp Outlet.</p>
            </div>
            <span id="outlet-count-badge" class="text-[12px] bg-surface-container text-on-surface-variant px-4 py-2 rounded-full font-semibold">
                Menampilkan 7 Cabang Aktif
            </span>
        </div>

        @php
            $outlets = [
                [
                    'city'=>'bogor', 'cityLabel'=>'Bogor - Karadenan', 'name'=>'Outlet Karadenan',
                    'badge'=>'Cabang Utama', 'badgeColor'=>'bg-primary text-on-primary',
                    'isOpen'=>true, 'statusText'=>'Buka',
                    'rating'=>'4.9', 'reviewCount'=>'420+',
                    'address'=>'Jl. Raya Karadenan, Cibinong, Kab. Bogor, Jawa Barat',
                    'hours'=>'Setiap Hari | 10:00 - 22:00 WIB',
                    'facilities'=>['Dine-in Mini Bar','Takeaway Cepat','Parkir Motor','Ojol Pickup Point'],
                    'wa'=>config('site.whatsapp'), 'waLabel'=>config('site.whatsapp'),
                    'maps'=>'https://maps.google.com/?q=Takoyaki+Nusantara+Tebet',
                    'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuB7jdrY-aKb2eQjAWxSuXPJHRt05sCaCZXwiHW_9R7mrwAuwUH_zPp8uq4Vr3HmsWZ9JYPaYEXWIMtY5AYo4PudBUChegfQbAPlCMEuKN2x-_ud3RY0S0Rfe-aaGVhRiIHnFmeQ0BSdA4pKkGoW53giPz2o_D1Gz7Q2-5iqpw1YfcbkeK0apedPIqp9zCAcRUe98QHn_w8LdS_LLPwyCIcHUJK2DRW0TWB7IALtTBMGGX8m4uLhWP86',
                ],
                [
                    'city'=>'bogor', 'cityLabel'=>'Bogor - Cibinong', 'name'=>'Outlet Cibinong',
                    'badge'=>'Favorit', 'badgeColor'=>'bg-secondary-container text-on-secondary-container',
                    'isOpen'=>true, 'statusText'=>'Buka',
                    'rating'=>'4.8', 'reviewCount'=>'380+',
                    'address'=>'Kawasan Cibinong, Kab. Bogor, Jawa Barat',
                    'hours'=>'Setiap Hari | 10:00 - 22:00 WIB',
                    'facilities'=>['Takeaway Cepat','Parkir Luas','QRIS Siap'],
                    'wa'=>config('site.whatsapp'), 'waLabel'=>config('site.whatsapp'),
                    'maps'=>'https://maps.google.com/?q=Takoyaki+Nusantara+Dipatiukur+Bandung',
                    'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuA-F5Tw0gMncuT31v_JlSVRpQeswJPwcLGC3QIUCmWZabTBym5Rw9rh5KCkqtW3pFRcyWj_r90IPjQQGCupg7F9VlS8mHoS4CB6UqO0-rg5WC98nv6n3eheK73lL4VNr7kmaRA2KXR-ntiofwfvRds2Kinlxdmwz9Wsa-ctce5p8yX-7M2UBK13CvmND9Dnww-z901uwbGJ-rt31OgtXFy9mqSbql3ce0unarhaO4HImP4bpERqq7ft',
                ],
                [
                    'city'=>'yogyakarta', 'cityLabel'=>'DI Yogyakarta', 'name'=>'Outlet Malioboro Hub',
                    'badge'=>'Cabang Utama', 'badgeColor'=>'bg-secondary text-on-secondary',
                    'isOpen'=>true, 'statusText'=>'Buka',
                    'rating'=>'5.0', 'reviewCount'=>'610+',
                    'address'=>'Jl. Malioboro No. 115, Sosromenduran, Gedong Tengen, Kota Yogyakarta 55271',
                    'hours'=>'Setiap Hari | 10:00 - 23:00 WIB',
                    'facilities'=>['Nongkrong Otentik','Live Griddle','Outdoor Bench'],
                    'wa'=>config('site.whatsapp'), 'waLabel'=>config('site.whatsapp'),
                    'maps'=>'https://maps.google.com/?q=Takoyaki+Nusantara+Malioboro+Yogyakarta',
                    'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuDDYJ0ltw8rKn3RO6YLrdhBRsXHqvUgpRqd_9stzozNzuZwq44bF7jeKwb3OhNDQDi6a8pPIKtPoEOvKIwpeehCVeglkUekgP5PPkA1z-6q17oay0Ux8Gb6NXVCgT8ZwmVqaOPlh0sHgUUPFIv6qoW6hzPKcJi1h8Z_XqyBypdUI7RrAIsCsdWoECFnGvqD0CUyI_4ZilrQisQod3YPH3NepXBqVwo5FbYg_wfBlgrkXW_Sor_JEDAT',
                ],
                [
                    'city'=>'bogor', 'cityLabel'=>'Bogor - Kampus UIKA', 'name'=>'Outlet UIKA',
                    'badge'=>'Sentra Mahasiswa', 'badgeColor'=>'bg-primary text-on-primary',
                    'isOpen'=>true, 'statusText'=>'Buka',
                    'rating'=>'4.9', 'reviewCount'=>'450+',
                    'address'=>'Kawasan Kampus Universitas Ibn Khaldun (UIKA), Jl. KH. Sholeh Iskandar, Kota Bogor',
                    'hours'=>'Setiap Hari | 10:00 - 22:00 WIB',
                    'facilities'=>['Parkir Mobil & Motor','Varian Pedas Komplit','Drive-thru Motor'],
                    'wa'=>config('site.whatsapp'), 'waLabel'=>config('site.whatsapp'),
                    'maps'=>'https://maps.google.com/?q=Takoyaki+Nusantara+Manyar+Surabaya',
                    'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuCTElDT_j_ya2rwvfK1f82t3-TOKy06FwQVjAu98SmRXjxrX48q1IRkf50rkJMg8VLHCJ1fXOG7PUyPHpvY2xWpaUjWcb_V4pBXw9VMiyR2Ken-sDcLxMZ5vTOtzLJBryEqCWVutVUU4jwGCMvlE8lIgyQHjV7JGmMgMJ4l786yuNP7q_EpqSMrHY0botyzuYI2JHZNp_FGBaOzLYYlnsJ3BcZ5iZOqbHHZTWzKlpbIXeq-pHe8EzE-',
                ],
                [
                    'city'=>'jakarta', 'cityLabel'=>'Jakarta Barat', 'name'=>'Outlet Tanjung Duren',
                    'badge'=>'Kuliner Malam', 'badgeColor'=>'bg-primary-container text-on-primary-container',
                    'isOpen'=>true, 'statusText'=>'Buka',
                    'rating'=>'4.8', 'reviewCount'=>'340+',
                    'address'=>'Jl. Tanjung Duren Barat I No. 19, Grogol Petamburan, Jakarta Barat 11470 (dekat Pasar Kopro)',
                    'hours'=>'Setiap Hari | 11:00 - 23:00 WIB',
                    'facilities'=>['Late Night Snack','Takeaway Box Kuat','QRIS & Tunai'],
                    'wa'=>config('site.whatsapp'), 'waLabel'=>config('site.whatsapp'),
                    'maps'=>'https://maps.google.com/?q=Takoyaki+Nusantara+Tanjung+Duren',
                    'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuAmWwP7PDsBWKsOhgofsHtmvaXPaHGV4kCXYz8iqlPcF3YSgUcO8g39ne20peBeZKGCYi8DmXj8Wc5UD_rwqn5zf1XlVjE0KM_0mZipUW4pGwU0ep0nDElVxu7jF0S--6jrb92iO2STdceg25gFRYdPzR_siC5DLMnvQ08vqXLviqXnlKgX6lMt0ECokaniTxohENj8R0U-VnFJF6JmfV2n9oVDnOxBPVs9Jm0YTUmOv4_r1rojYynY',
                ],
                [
                    'city'=>'bali', 'cityLabel'=>'Badung - Bali', 'name'=>'Outlet Dewi Sri Kuta',
                    'badge'=>'Sentra Wisata Bali', 'badgeColor'=>'bg-secondary text-on-secondary',
                    'isOpen'=>true, 'statusText'=>'Buka',
                    'rating'=>'4.9', 'reviewCount'=>'510+',
                    'address'=>'Jl. Dewi Sri No. 88A, Legian, Kuta, Kab. Badung, Bali 80361 (depan Food Plaza Dewi Sri)',
                    'hours'=>'Setiap Hari | 11:00 - 23:30 WITA',
                    'facilities'=>['Tourist Friendly','Area Duduk Santai','Halal Guaranteed'],
                    'wa'=>config('site.whatsapp'), 'waLabel'=>config('site.whatsapp'),
                    'maps'=>'https://maps.google.com/?q=Takoyaki+Nusantara+Dewi+Sri+Bali',
                    'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuCUR6_UWAMf5-esM0JNVQri3Y8iUL9g-P73DCUqT3Om-jpAbCx-27uhCn05XYFAOkn9dizzOJsx2Si-jdR-dsvRjyjGwWj3R_ftq-IuiInCXBzUYABEh11sMWm8EDLSCHuYY7RTXSQj2JYdqzqQz1a5MQlOkCwOh1IvF7EQLLe6FmUnbVUdFL74AcQExpQDQcwgp-MPAR0olxtwm4jjA2OqKiYlkyAA6yeFDvzFXe3mJUGSbPVdEOam',
                ],
                [
                    'city'=>'jakarta', 'cityLabel'=>'Jakarta Timur', 'name'=>'Outlet Rawamangun Hub',
                    'badge'=>'Cabang Baru', 'badgeColor'=>'bg-tertiary text-on-tertiary',
                    'isOpen'=>true, 'statusText'=>'Buka',
                    'rating'=>'4.9', 'reviewCount'=>'195+',
                    'address'=>'Jl. Balai Pustaka Timur No. 28, Rawamangun, Pulo Gadung, Jakarta Timur 13220',
                    'hours'=>'Setiap Hari | 10:00 - 22:00 WIB',
                    'facilities'=>['Takeaway Cepat','Parkir Motor & Mobil','QRIS Siap'],
                    'wa'=>config('site.whatsapp'), 'waLabel'=>config('site.whatsapp'),
                    'maps'=>'https://maps.google.com/?q=Takoyaki+Nusantara+Rawamangun',
                    'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuB7jdrY-aKb2eQjAWxSuXPJHRt05sCaCZXwiHW_9R7mrwAuwUH_zPp8uq4Vr3HmsWZ9JYPaYEXWIMtY5AYo4PudBUChegfQbAPlCMEuKN2x-_ud3RY0S0Rfe-aaGVhRiIHnFmeQ0BSdA4pKkGoW53giPz2o_D1Gz7Q2-5iqpw1YfcbkeK0apedPIqp9zCAcRUe98QHn_w8LdS_LLPwyCIcHUJK2DRW0TWB7IALtTBMGGX8m4uLhWP86',
                ],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="outlet-card-container">
            @foreach($outlets as $o)
                <article class="outlet-card bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-md transition-all p-4 flex flex-col justify-between" data-city="{{ $o['city'] }}" data-open="{{ $o['isOpen'] ? 'true' : 'false' }}">
                    <div>
                        <div class="relative w-full h-44 rounded-xl overflow-hidden mb-4 bg-surface-variant">
                            <img src="{{ $o['img'] }}" alt="{{ $o['name'] }}" loading="lazy"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            <div class="absolute top-3 left-3 flex flex-wrap gap-1">
                                <span class="{{ $o['badgeColor'] }} text-[10px] px-2.5 py-1 rounded-md shadow-sm font-bold uppercase tracking-wider">{{ $o['badge'] }}</span>
                                @if($o['isOpen'])
                                    <span class="bg-tertiary text-on-tertiary text-[10px] px-2.5 py-1 rounded-md shadow-sm font-semibold flex items-center gap-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-white animate-ping"></span> Buka
                                    </span>
                                @else
                                    <span class="bg-surface-container-highest text-on-surface-variant text-[10px] px-2.5 py-1 rounded-md shadow-sm font-semibold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[13px]">pending</span> {{ $o['statusText'] }}
                                    </span>
                                @endif
                            </div>
                            <div class="absolute bottom-3 right-3 bg-white/90 backdrop-blur-sm px-2.5 py-0.5 rounded-md text-[11px] font-medium text-on-surface">
                                ⭐ {{ $o['rating'] }} ({{ $o['reviewCount'] }})
                            </div>
                        </div>

                        <div class="flex items-start justify-between gap-2">
                            <div>
                                <span class="text-[10.5px] text-primary font-bold uppercase">{{ $o['cityLabel'] }}</span>
                                <h3 class="text-[16px] font-bold text-on-surface mt-0.5">{{ $o['name'] }}</h3>
                            </div>
                            <span class="material-symbols-outlined text-primary text-[22px]">verified</span>
                        </div>

                        <p class="text-[12.5px] text-on-surface-variant mt-2 line-clamp-2 leading-relaxed">{{ $o['address'] }}</p>

                        <div class="mt-3 p-2 bg-surface-container-low rounded-lg flex items-center gap-2 text-[12px] text-on-surface">
                            <span class="material-symbols-outlined text-primary text-[16px]">schedule</span>
                            <span>{{ $o['hours'] }}</span>
                        </div>

                        <div class="mt-3 flex flex-wrap gap-1">
                            @foreach($o['facilities'] as $f)
                                <span class="px-2 py-0.5 bg-surface-variant text-[10.5px] rounded text-on-surface-variant">{{ $f }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-4 pt-3 border-t border-outline-variant/30 flex flex-col gap-2">
                        @php
                            $waMsg = urlencode("Halo Admin {$o['name']} Takoyaki Nusantara, saya ingin memesan takoyaki hangat.");
                        @endphp
                        <a href="https://wa.me/{{ $o['wa'] }}?text={{ $waMsg }}" target="_blank" rel="noopener"
                           class="w-full inline-flex items-center justify-center gap-2 bg-primary text-on-primary hover:bg-primary-container py-2.5 rounded-xl text-[12.5px] font-bold shadow-sm transition-all">
                            <span class="material-symbols-outlined text-[16px]">chat</span>
                            Pesan via WhatsApp ({{ $o['waLabel'] }})
                        </a>
                        <div class="grid grid-cols-2 gap-2">
                            @if($o['maps'] !== '#')
                                <a href="{{ $o['maps'] }}" target="_blank" rel="noopener"
                                   class="inline-flex items-center justify-center gap-1 bg-surface-container hover:bg-surface-container-high text-on-surface text-[11.5px] py-2 rounded-lg transition-all font-semibold">
                                    <span class="material-symbols-outlined text-[15px] text-primary">directions</span>
                                    Petunjuk Maps
                                </a>
                            @else
                                <span class="inline-flex items-center justify-center gap-1 bg-surface-container text-on-surface-variant text-[11.5px] py-2 rounded-lg font-semibold cursor-not-allowed opacity-75">
                                    <span class="material-symbols-outlined text-[15px]">hourglass_empty</span>
                                    Belum Diapprove
                                </span>
                            @endif
                            <a href="https://gofood.co.id" target="_blank" rel="noopener"
                               class="inline-flex items-center justify-center gap-1 bg-surface-container hover:bg-surface-container-high text-on-surface text-[11.5px] py-2 rounded-lg transition-all font-semibold">
                                <span class="material-symbols-outlined text-[15px] text-secondary">moped</span>
                                GoFood / Shopee
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        {{-- No Results --}}
        <div id="no-results-state" class="hidden flex-col items-center justify-center py-16 text-center bg-surface-container-lowest rounded-2xl p-8 mt-6">
            <span class="material-symbols-outlined text-[54px] text-primary/40">wrong_location</span>
            <h3 class="text-[17px] font-bold text-on-surface mt-2">Outlet Tidak Ditemukan</h3>
            <p class="text-[13px] text-on-surface-variant max-w-md mt-1">
                Tidak ada cabang yang cocok dengan kata kunci pencarian Anda. Ingin rekomendasi cabang terdekat?
            </p>
            <button id="reset-filters-btn" class="mt-5 px-4 py-2 bg-primary text-on-primary rounded-xl text-[12.5px] font-bold">
                Reset Filter & Pencarian
            </button>
        </div>
    </div>
</section>