<section class="w-full py-10 bg-surface" id="photo-carousel-section">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop flex flex-col gap-4">

        <div class="flex flex-col sm:flex-row sm:items-end justify-between gap-3">
            <div>
                <div class="inline-flex items-center gap-2 text-primary text-[11px] uppercase tracking-wider font-bold">
                    <span class="material-symbols-outlined text-[16px]">auto_awesome_motion</span>
                    <span>Sorotan Bergulir Otomatis</span>
                </div>
                <h2 class="text-[22px] md:text-[32px] font-bold text-on-surface mt-1">Momen Spesial & Suasana Hangat</h2>
            </div>
            <div class="flex items-center gap-3">
                <div class="flex items-center gap-1.5 px-3 py-1 rounded-full bg-surface-container-high/60 text-on-surface text-[11px] border border-outline-variant/30">
                    <span class="relative flex h-2 w-2">
                        <span class="animate-ping absolute inline-flex h-full w-full rounded-full bg-tertiary opacity-75"></span>
                        <span class="relative inline-flex rounded-full h-2 w-2 bg-tertiary"></span>
                    </span>
                    <span id="carousel-status-text" class="font-semibold">Auto-Slide Aktif (3.8s)</span>
                </div>
                <button id="slider-prev-btn" aria-label="Slide sebelumnya" class="w-9 h-9 rounded-full bg-white shadow-sm border border-outline-variant/40 flex items-center justify-center text-on-surface hover:text-primary hover:border-primary transition-all">
                    <span class="material-symbols-outlined text-[18px]">chevron_left</span>
                </button>
                <button id="slider-next-btn" aria-label="Slide berikutnya" class="w-9 h-9 rounded-full bg-white shadow-sm border border-outline-variant/40 flex items-center justify-center text-on-surface hover:text-primary hover:border-primary transition-all">
                    <span class="material-symbols-outlined text-[18px]">chevron_right</span>
                </button>
            </div>
        </div>

        @php
            $slidesData = [
                [
                    'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuAeI4Tee6dFPuK_LsZDM599a301XawBeC7-5L1qua5D9i5FRBAf8F5WGSeZ-66kcS_4EyFSzugvqxbJdeeNTbpctoDUeB1ZR6zC3cWwUeekxCAywaBQTetxKTXsq78xQmw-VKMjTxDG5biEYgtzT9LcztJSn9dMRHdM2kebVxzCJdn5nJdPPaplTMKkWnfmcdVQO4BkQn_arV9tAEbiX_43gR6dN3wDhujte-u-n8OE',
                    'badge'=>'Festival Akbar', 'badgeColor'=>'bg-primary text-on-primary',
                    'meta'=>'Senayan Food Carnivale',
                    'captionNumber'=>'#01',
                    'title'=>'1.200+ Porsi Takoyaki Hangat Ludes di Festival Kuliner Senayan',
                    'desc'=>'Antrean ribuan pecinta kuliner menikmati takoyaki crispy dengan racikan rempah autentik dan katsuobushi menari.'
                ],
                [
                    'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuDNnIX_z43mfUaRmlIN-7k8n7uPSi8JFugzzHkd8LoWB_-FldP1L5AnalDgI5drR37wxRRezbh3GLcJ2wvTDb31-A9Lnc9_A-CB4PC3viugxrCQYMR2ARvzXPGQxv63phISv63y9VIpUcvGTIrhmhK_oyynYEcMgw50dGngLZPuv51r0v5q6noF8sOYl906UEZ4k32Ye6hHFEPj9QOQKK2P0SoNGi_I03MFLI4I_iPa',
                    'badge'=>'Kualitas Signature', 'badgeColor'=>'bg-tertiary-container text-on-tertiary-container',
                    'meta'=>'Made-to-Order Fresh',
                    'captionNumber'=>'#02',
                    'title'=>'Sensasi Crispy Luar Lembut Dalam dengan Isian Gurita Segar',
                    'desc'=>'Disajikan langsung di wadah bambu boat dengan saus tare pekat, mayo lembut, dan aonori segar.'
                ],
                [
                    'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuB29m6Bd90RXkhsA64ZqjniL28g1DkuFHSubRW6f_4fFTOkVjpoCLgNX18LBo15W9UZaQF0HKDsaxtEPuJy14OBqmFoa_amEkaF9yFaQoxGz-uazupLcsHxLflixcNCXyfjadSgeK-Mb7Y0jDWx5BKYVlpErAn4hUkK-1rEshIx9briIutJbUd6ltJI5YYyYIezqikijI0IncQ5pNi0Sk-V2k48fA-bHt4bMYTG7Nms',
                    'badge'=>'Sertifikasi Halal MUI', 'badgeColor'=>'bg-tertiary text-on-tertiary',
                    'meta'=>'Standar HACCP',
                    'captionNumber'=>'#03',
                    'title'=>'Kebersihan Kelas Dunia & Presisi Bahan Baku Berkualitas',
                    'desc'=>'Tim ahli memverifikasi higienitas tiap takaran adonan premix sebelum dikirim ke 75+ outlet mitra.'
                ],
                [
                    'img'=>'https://lh3.googleusercontent.com/aida/AEtjO1UDp4qZYYK1zLJ6VV1lcMn6N8ETwh9JLwJPYsklt1dNwNsDESNrSXDzHMEtcS38ycHe5uufc7QMLNuCIKh0hHnxllqUFv2HB1vYgYW44Hk1BJBWjrhT_dU7FeS-vjkYbmeOqd1EcnD7U7RyH5n6LQ-fdeX-L5d25tKKkajp0kMnFVQs356Gnradnk6pPoqWb2iA_t-b1lI-j4MWD80OuNczy9eB7umvpu9GzBmjj9BZQQ',
                    'badge'=>'Pelayanan Hangat', 'badgeColor'=>'bg-primary text-on-primary',
                    'meta'=>'Open Kitchen Experience',
                    'captionNumber'=>'#04',
                    'title'=>'Interaksi Bahagia Koki Mitra & Pengunjung di Gerai Nusantara',
                    'desc'=>'Aroma sedap wajan besi takoyaki dan senyuman ramah menjadi ciri khas tak terlupakan di setiap outlet.'
                ],
            ];
        @endphp

        <div id="carousel-wrapper" class="relative w-full h-[360px] sm:h-[440px] md:h-[500px] rounded-3xl overflow-hidden shadow-2xl border border-white/60 group select-none">
            @foreach($slidesData as $i => $s)
                <div class="carousel-slide absolute inset-0 transition-opacity duration-700 ease-in-out {{ $i === 0 ? 'opacity-100 z-10' : 'opacity-0 pointer-events-none' }}" data-index="{{ $i }}">
                    <img src="{{ $s['img'] }}" alt="{{ $s['title'] }}" class="w-full h-full object-cover">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/30 to-black/10"></div>

                    <div class="absolute top-4 md:top-6 left-4 md:left-6 flex flex-wrap items-center gap-2">
                        <span class="px-3 py-1 rounded-full {{ $s['badgeColor'] }} text-[11px] font-bold flex items-center gap-1 shadow-md">
                            <span class="material-symbols-outlined text-[13px]">local_fire_department</span>
                            {{ $s['badge'] }}
                        </span>
                        <span class="px-3 py-1 rounded-full bg-black/50 backdrop-blur-md text-white text-[11px] border border-white/20">
                            {{ $s['meta'] }}
                        </span>
                    </div>

                    <div class="absolute bottom-20 md:bottom-24 left-4 md:left-6 right-4 md:right-16 text-white max-w-3xl">
                        <span class="text-[11px] uppercase tracking-widest text-secondary-fixed font-bold">Dokumentasi Unggulan {{ $s['captionNumber'] }}</span>
                        <h3 class="text-[20px] md:text-[32px] font-extrabold leading-tight mt-1">
                            {{ $s['title'] }}
                        </h3>
                        <p class="text-[13px] md:text-[15px] text-white/80 line-clamp-2 mt-2">
                            {{ $s['desc'] }}
                        </p>
                    </div>
                </div>
            @endforeach

            {{-- Progress + Dots --}}
            <div class="absolute bottom-0 inset-x-0 z-20 bg-gradient-to-t from-black/90 to-transparent pt-6 pb-4 px-6 flex flex-col gap-2">
                <div class="w-full bg-white/25 h-1 rounded-full overflow-hidden">
                    <div id="slide-progress-bar" class="bg-primary h-full w-0 transition-[width] duration-75 ease-linear"></div>
                </div>
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        @foreach($slidesData as $i => $s)
                            <button data-goto="{{ $i }}" class="carousel-dot h-2 rounded-full transition-all duration-300 {{ $i === 0 ? 'w-8 bg-primary' : 'w-2 bg-white/50 hover:bg-white' }}" aria-label="Slide {{ $i+1 }}"></button>
                        @endforeach
                    </div>
                    <span class="text-[11px] text-white/70 hidden sm:inline">Arahkan kursor untuk jeda putar</span>
                </div>
            </div>
        </div>
    </div>
</section>