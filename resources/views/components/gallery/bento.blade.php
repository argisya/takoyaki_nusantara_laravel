<section class="w-full py-14 bg-surface relative">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop flex flex-col gap-8">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <span class="text-[11px] text-primary uppercase tracking-wider font-bold">Sorotan Utama</span>
                <h2 class="text-[24px] md:text-[36px] font-bold text-on-surface mt-1">Momen Pilihan & Standar Kualitas</h2>
            </div>
            <p class="text-[13.5px] text-on-surface-variant max-w-md">
                Dokumentasi langsung dari lapangan: antusiasme ribuan penikmat kuliner, higienitas dapur sentral, dan kenyamanan gerai franchise terstandarisasi.
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-12 gap-5">

            {{-- Large Festival Card --}}
            <div class="md:col-span-8 bg-surface-container-lowest rounded-2xl overflow-hidden shadow-lg border border-outline-variant/30 group hover:shadow-2xl transition-all duration-300 flex flex-col">
                <div class="relative w-full h-80 sm:h-96 overflow-hidden">
                    <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700"
                         alt="Festival Kuliner Nusantara Senayan"
                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeI4Tee6dFPuK_LsZDM599a301XawBeC7-5L1qua5D9i5FRBAf8F5WGSeZ-66kcS_4EyFSzugvqxbJdeeNTbpctoDUeB1ZR6zC3cWwUeekxCAywaBQTetxKTXsq78xQmw-VKMjTxDG5biEYgtzT9LcztJSn9dMRHdM2kebVxzCJdn5nJdPPaplTMKkWnfmcdVQO4BkQn_arV9tAEbiX_43gR6dN3wDhujte-u-n8OE">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/25 to-transparent"></div>
                    <div class="absolute top-4 left-4">
                        <span class="px-3.5 py-1 rounded-full bg-primary text-on-primary text-[11px] shadow font-semibold">Festival Kuliner Akbar</span>
                    </div>
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <span class="text-[11px] text-secondary-fixed font-semibold">Festival Kuliner Senayan • 1.200+ Porsi Ludes</span>
                        <h3 class="text-[18px] md:text-[22px] font-bold mt-1">Antusiasme Ribuan Pengunjung Menyantap Takoyaki Autentik</h3>
                    </div>
                </div>
                <div class="p-5 flex items-center justify-between gap-4 bg-white">
                    <p class="text-[13px] text-on-surface-variant leading-relaxed">
                        Dokumentasi antrean panjang di booth utama Takoyaki Nusantara. Pelanggan menikmati sajian renyah gurih langsung saat masih mengepul hangat.
                    </p>
                    <div class="w-10 h-10 rounded-full bg-primary/10 text-primary flex items-center justify-center shrink-0 group-hover:bg-primary group-hover:text-white transition-all">
                        <span class="material-symbols-outlined text-[22px]">zoom_in</span>
                    </div>
                </div>
            </div>

            {{-- Small Cards --}}
            @php
                $smallCards = [
                    ['img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuB29m6Bd90RXkhsA64ZqjniL28g1DkuFHSubRW6f_4fFTOkVjpoCLgNX18LBo15W9UZaQF0HKDsaxtEPuJy14OBqmFoa_amEkaF9yFaQoxGz-uazupLcsHxLflixcNCXyfjadSgeK-Mb7Y0jDWx5BKYVlpErAn4hUkK-1rEshIx9briIutJbUd6ltJI5YYyYIezqikijI0IncQ5pNi0Sk-V2k48fA-bHt4bMYTG7Nms', 'badge'=>'Dapur Sentral Halal', 'badgeColor'=>'bg-tertiary-container text-on-tertiary-container', 'title'=>'Higienitas & Uji Mutu Baku', 'desc'=>'Pemotongan gurita segar & pengemasan bumbu di fasilitas steril Halal MUI ID3111000129.', 'cta'=>'Standar HACCP Terpenuhi', 'h'=>'h-64 sm:h-72'],
                    ['img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuCkps6NaFUjNO2SAJApm4ehe-pFrIsAwo0P1Pp9Kv43fpEHCmHYnfbhGUL0vu7frzJT4Dqd3b9uyuE2Vio2VTHlJ2ws_0WkNJ8_tVGfe_agcqMvdo4-C9ZASXoW1tusE3lkfz12cCLTBwTgwXFB1VqZuOviUaZfjId9D4pL43L0o8Mk3RO2qAVLq2ZydYbTG0RcZsjeLHpx6Ww6QlyP9q82v6O8Gh50WCLf6-PHtEuW', 'badge'=>'Konsep Gerai Mitra', 'badgeColor'=>'bg-surface-container-lowest text-primary', 'title'=>'Semi-Container Booth Modern', 'desc'=>'Desain outlet compact hemat ruang, dilengkapi exhaust hood & display acrylic.', 'cta'=>'Desain Modular 2025', 'h'=>'h-64'],
                    ['img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuDNnIX_z43mfUaRmlIN-7k8n7uPSi8JFugzzHkd8LoWB_-FldP1L5AnalDgI5drR37wxRRezbh3GLcJ2wvTDb31-A9Lnc9_A-CB4PC3viugxrCQYMR2ARvzXPGQxv63phISv63y9VIpUcvGTIrhmhK_oyynYEcMgw50dGngLZPuv51r0v5q6noF8sOYl906UEZ4k32Ye6hHFEPj9QOQKK2P0SoNGi_I03MFLI4I_iPa', 'badge'=>'Sajian Fresh', 'badgeColor'=>'bg-primary text-on-primary', 'title'=>'Tekstur Crispy Luar Lembut Dalam', 'desc'=>'Dibuat dadakan di atas loyang besi tebal panas untuk kerenyahan maksimal.', 'cta'=>'100% Japanese Taste', 'h'=>'h-64'],
                    ['img'=>'https://lh3.googleusercontent.com/aida/AEtjO1UDp4qZYYK1zLJ6VV1lcMn6N8ETwh9JLwJPYsklt1dNwNsDESNrSXDzHMEtcS38ycHe5uufc7QMLNuCIKh0hHnxllqUFv2HB1vYgYW44Hk1BJBWjrhT_dU7FeS-vjkYbmeOqd1EcnD7U7RyH5n6LQ-fdeX-L5d25tKKkajp0kMnFVQs356Gnradnk6pPoqWb2iA_t-b1lI-j4MWD80OuNczy9eB7umvpu9GzBmjj9BZQQ', 'badge'=>'Pelayanan Ramah', 'badgeColor'=>'bg-surface-container-lowest text-on-surface', 'title'=>'Interaksi Hangat Koki & Pembeli', 'desc'=>'Konsep open kitchen memungkinkan pelanggan melihat kelihaian koki membalik takoyaki.', 'cta'=>'Higienis & Terbuka', 'h'=>'h-64'],
                ];
            @endphp

            @foreach($smallCards as $c)
                <div class="md:col-span-4 bg-surface-container-lowest rounded-2xl overflow-hidden shadow-lg border border-outline-variant/30 group hover:shadow-2xl transition-all duration-300 flex flex-col">
                    <div class="relative w-full {{ $c['h'] }} overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700" alt="{{ $c['title'] }}" src="{{ $c['img'] }}">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-transparent to-transparent"></div>
                        <div class="absolute top-4 left-4">
                            <span class="px-3.5 py-1 rounded-full {{ $c['badgeColor'] }} text-[11px] shadow font-semibold">{{ $c['badge'] }}</span>
                        </div>
                        <div class="absolute bottom-4 left-4 right-4 text-white">
                            <h4 class="text-[15px] font-bold">{{ $c['title'] }}</h4>
                        </div>
                    </div>
                    <div class="p-5 flex flex-col gap-2 bg-white flex-1 justify-between">
                        <p class="text-[12px] text-on-surface-variant leading-relaxed">{{ $c['desc'] }}</p>
                        <span class="text-[11px] text-primary font-bold">{{ $c['cta'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>