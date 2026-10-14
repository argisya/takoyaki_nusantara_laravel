<section class="w-full py-14 bg-gradient-to-b from-surface via-surface-container-low/60 to-surface relative overflow-hidden border-t border-outline-variant/30">
    <div class="absolute top-1/4 -left-32 w-80 h-80 bg-primary/10 rounded-full pointer-events-none blur-3xl"></div>
    <div class="absolute bottom-10 right-0 w-96 h-96 bg-secondary-container/20 rounded-full pointer-events-none blur-3xl"></div>

    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10 flex flex-col gap-8">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-4">
            <div>
                <span class="inline-flex items-center gap-2 px-3 py-1 rounded-full bg-primary/10 text-primary text-[11px] border border-primary/20 font-bold uppercase tracking-wider">
                    <span class="material-symbols-outlined text-[16px]">videocam</span>
                    Video Experience & Reels
                </span>
                <h2 class="text-[24px] md:text-[36px] font-bold text-on-surface mt-2 tracking-tight">
                    Tonton Aksi Dapur & Keseruan Gerai Secara Langsung
                </h2>
            </div>
            <div class="bg-white/80 backdrop-blur-md px-4 py-2 rounded-full flex items-center gap-2.5 shadow-sm border border-outline-variant/40 w-fit">
                <div class="flex items-end gap-0.5 h-4">
                    @for($i = 1; $i <= 4; $i++)
                        <span class="w-0.5 bg-primary rounded-full" style="height:{{ [8,12,10,14][$i-1] }}px"></span>
                    @endfor
                </div>
                <span class="text-[11px] text-on-surface font-semibold">Sound On • Suara Renyah Gurih</span>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-start">

            {{-- Big Video Player --}}
            <div class="lg:col-span-7 bg-surface-container-lowest rounded-3xl overflow-hidden shadow-xl border border-outline-variant/30 group flex flex-col">
                <div class="relative w-full aspect-video bg-black overflow-hidden cursor-pointer" id="main-video-trigger">
                    <img id="main-video-poster"
                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuAeI4Tee6dFPuK_LsZDM599a301XawBeC7-5L1qua5D9i5FRBAf8F5WGSeZ-66kcS_4EyFSzugvqxbJdeeNTbpctoDUeB1ZR6zC3cWwUeekxCAywaBQTetxKTXsq78xQmw-VKMjTxDG5biEYgtzT9LcztJSn9dMRHdM2kebVxzCJdn5nJdPPaplTMKkWnfmcdVQO4BkQn_arV9tAEbiX_43gR6dN3wDhujte-u-n8OE"
                         alt="Cinematic Video Preview"
                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700 opacity-90">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/90 via-black/30 to-black/30"></div>

                    <div class="absolute top-4 left-4 flex items-center gap-2">
                        <span class="px-3 py-1 rounded-full bg-primary text-white text-[11px] flex items-center gap-1.5 shadow-md font-bold">
                            <span class="material-symbols-outlined text-[13px]">play_circle</span>
                            Cinematic 4K
                        </span>
                        <span class="px-2.5 py-1 rounded-full bg-black/60 backdrop-blur-md text-white/90 text-[11px] border border-white/20">
                            Dapur Sentral & Outlet
                        </span>
                    </div>

                    <div class="absolute top-4 right-4">
                        <span class="px-2.5 py-1 rounded-full bg-black/60 backdrop-blur-md text-white text-[11px] flex items-center gap-1">
                            <span class="material-symbols-outlined text-[13px]">schedule</span>
                            03:42
                        </span>
                    </div>

                    <div class="absolute inset-0 flex items-center justify-center">
                        <div class="relative flex items-center justify-center">
                            <div class="absolute w-20 h-20 rounded-full bg-primary/40 animate-ping"></div>
                            <button class="relative w-20 h-20 rounded-full bg-primary hover:bg-primary-container text-white flex items-center justify-center shadow-2xl transform group-hover:scale-110 transition-all duration-300 border-4 border-white/80">
                                <span class="material-symbols-outlined text-[40px] ml-1">play_arrow</span>
                            </button>
                        </div>
                    </div>

                    <div class="absolute bottom-0 inset-x-0 bg-gradient-to-t from-black via-black/80 to-transparent p-4 flex flex-col gap-2">
                        <div class="w-full bg-white/30 h-1 rounded-full overflow-hidden">
                            <div class="bg-primary h-full w-[42%]"></div>
                        </div>
                        <div class="flex items-center justify-between text-white text-[12px]">
                            <div class="flex items-center gap-3">
                                <span class="material-symbols-outlined text-[18px] cursor-pointer hover:text-primary transition-colors">play_arrow</span>
                                <span class="material-symbols-outlined text-[18px] cursor-pointer hover:text-primary transition-colors">volume_up</span>
                                <span class="font-semibold">01:32 / 03:42</span>
                            </div>
                            <div class="flex items-center gap-3">
                                <span class="bg-white/20 px-2 py-0.5 rounded text-[10px] font-semibold">1080p HD</span>
                                <span class="material-symbols-outlined text-[18px] cursor-pointer hover:text-primary transition-colors">fullscreen</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-5 md:p-6 flex flex-col gap-4">
                    <div class="flex flex-wrap items-center gap-2">
                        <span class="px-3 py-1 rounded-full bg-surface-container text-primary text-[11px] font-semibold">#BehindTheScenes</span>
                        <span class="px-3 py-1 rounded-full bg-surface-container text-on-surface-variant text-[11px]">#RahasiaBumbu</span>
                        <span class="px-3 py-1 rounded-full bg-surface-container text-on-surface-variant text-[11px]">#KemitraanTakoyaki</span>
                    </div>
                    <div>
                        <h3 class="text-[18px] md:text-[22px] font-bold text-on-surface">
                            Proses Pembuatan Takoyaki Autentik & Rahasia Bumbu Rempah Nusantara
                        </h3>
                        <p class="text-[13.5px] text-on-surface-variant mt-2 leading-relaxed">
                            Ikuti perjalanan dari pemilihan gurita segar, peracikan adonan beraroma gurih, hingga teknik putar cepat di loyang bersuhu 200°C yang menghasilkan bola takoyaki renyah sempurna.
                        </p>
                    </div>
                    <div class="pt-2 flex items-center justify-between border-t border-outline-variant/30 text-[12px] text-on-surface-variant">
                        <div class="flex items-center gap-3">
                            <span class="flex items-center gap-1 font-semibold text-on-surface">
                                <span class="material-symbols-outlined text-primary text-[16px]">visibility</span>
                                248.5K Penonton
                            </span>
                            <span>•</span>
                            <span class="flex items-center gap-1 font-semibold text-on-surface">
                                <span class="material-symbols-outlined text-primary text-[16px]">favorite</span>
                                18.2K Suka
                            </span>
                        </div>
                        <button class="text-primary text-[11px] font-bold flex items-center gap-1 hover:underline">
                            Bagikan Video
                            <span class="material-symbols-outlined text-[16px]">share</span>
                        </button>
                    </div>
                </div>
            </div>

            {{-- Reels --}}
            <div class="lg:col-span-5 flex flex-col gap-4">
                <div class="flex items-center justify-between">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary">play_lesson</span>
                        <h4 class="text-[15px] font-bold text-on-surface">Cuplikan Reels Terpopuler</h4>
                    </div>
                    <span class="text-[11px] text-on-surface-variant">3 Klip Pilihan</span>
                </div>

                @php
                    $reels = [
                        ['img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuBgs0F_-sRpBZVQYvVG-S2Bd_T-atYH-SFtam2ywG1vq5zwLCjXEDfV1h4owZZdz8tPW4U0tOcjdqbFHIHRVCJ9YjDZSNNAZQNN-cgIqNKbZ6OOO9vFhQgc2sQTwKmTqw4eotzU22fUYbfg4wMMaQikIcXW42lKJUVqZaSSgYi_cgUxUSkZDjRCz_3Q5Ve57shn1vlD4Kq10p1pXY2A9U8gVwQ-NDqWez7SnXi7p0vj', 'tag'=>'Tutorial Membalik Presisi', 'tagColor'=>'text-primary', 'title'=>'Skill Putar Takoyaki Kilat: 1 Loyang Matang Rata dalam 3 Menit!', 'duration'=>'00:45', 'views'=>'1.2M', 'likes'=>'94K'],
                        ['img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuAgpN-8g2c5dju8CL8GqSWJSaKz7NME7NXA7YghjgapBpvno1eOCB7Xy4jGUwPSRtXHE_YzIcgdTqMU1JrlpS4eOpTVPwEyTGu7NRroWuVVzTFEicyNYfsNGaqCUpXhGF2jJNYHsQ7zDgwqPI5zhSHTJlxt5xPfToyvLTuBupI1yafFgtr2yopDWOCrKg8P8hcSRuQIXMSTHSkWMOQjPOYMdGChbLJC9CntEhOboMP9', 'tag'=>'Review Jujur Foodies', 'tagColor'=>'text-secondary', 'title'=>'Reaksi Pertama Kali Cobain Takoyaki Sambal Nusantara: Nagih Pol!', 'duration'=>'00:32', 'views'=>'780K', 'likes'=>'61K'],
                        ['img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuDsvvfmKq78s43HiMaEiR4KdDt4IK4FG7OKfDke2mIIWNHkU8V_kXzloqAqglOLSiCn6eGrSCINkjMlXEJTwFOb4tXS9hGqkr2V02m_XPi3ym939VJdPV8-3uOzMEBdXoZgjjqpWblFUyMrxtK4EeWcOFFCtIgPbELhHVljYVfd2vOEImfEe_KQ-70sdIHvTNce1Je7493nRHKEJyEl23UwqZB9DSbGMaQPkv8e3O55', 'tag'=>'Standar Kebersihan Dapur', 'tagColor'=>'text-tertiary', 'title'=>'Rahasia Adonan Takoyaki Gurih Lembut Tanpa Bahan Pengawet', 'duration'=>'01:05', 'views'=>'450K', 'likes'=>'39K'],
                    ];
                @endphp

                @foreach($reels as $r)
                    <div class="bg-white/90 backdrop-blur-md p-3 rounded-2xl flex gap-4 transition-all duration-300 hover:-translate-y-1 group cursor-pointer border border-outline-variant/30 shadow-sm">
                        <div class="relative w-28 h-36 rounded-xl overflow-hidden shrink-0 bg-black">
                            <img src="{{ $r['img'] }}" alt="{{ $r['title'] }}" loading="lazy" class="w-full h-full object-cover group-hover:scale-110 transition-transform">
                            <div class="absolute inset-0 bg-black/40 flex items-center justify-center">
                                <div class="w-9 h-9 rounded-full bg-white/90 text-primary flex items-center justify-center shadow">
                                    <span class="material-symbols-outlined text-[20px]">play_arrow</span>
                                </div>
                            </div>
                            <span class="absolute bottom-1.5 left-1.5 px-1.5 py-0.5 rounded bg-black/70 text-white text-[10px] font-bold">{{ $r['duration'] }}</span>
                        </div>
                        <div class="flex flex-col justify-between py-1 flex-1">
                            <div>
                                <span class="text-[10.5px] font-bold uppercase tracking-wider {{ $r['tagColor'] }}">{{ $r['tag'] }}</span>
                                <h5 class="text-[13.5px] font-bold text-on-surface group-hover:text-primary transition-colors line-clamp-2 mt-0.5">
                                    {{ $r['title'] }}
                                </h5>
                            </div>
                            <div class="flex items-center gap-3 text-[11px] text-on-surface-variant mt-2 font-medium">
                                <span class="flex items-center gap-1"><span class="material-symbols-outlined text-[12px]">visibility</span> {{ $r['views'] }} Views</span>
                                <span>•</span>
                                <span class="flex items-center gap-1 text-primary"><span class="material-symbols-outlined text-[12px]">favorite</span> {{ $r['likes'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>