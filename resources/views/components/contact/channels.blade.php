<section class="w-full py-12">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <div class="flex flex-col sm:flex-row sm:items-end justify-between mb-6 gap-2">
            <div>
                <span class="text-[11px] uppercase tracking-wider text-secondary font-bold">Pilih Jalur Komunikasi</span>
                <h2 class="text-[24px] md:text-[32px] font-bold text-on-surface mt-1">Saluran Resmi Takoyaki Nusantara</h2>
            </div>
            <p class="text-[13px] text-on-surface-variant max-w-md">Pilih kanal paling sesuai dengan kebutuhan Anda untuk penanganan cepat dan terarah.</p>
        </div>

        @php
            $channels = [
                ['icon'=>'chat',           'title'=>'Customer Care & Order', 'phone'=>'+62 811-2345-6789', 'wa'=>'6281123456789', 'cta'=>'Chat via WhatsApp',  'desc'=>'Respon tercepat untuk info menu, booking event arisan/kantor, dan pemesanan partai besar.', 'badge'=>'Respon Cepat', 'badgeColor'=>'bg-tertiary/10 text-tertiary', 'btnColor'=>'bg-tertiary hover:bg-tertiary-container text-on-tertiary', 'btnIcon'=>'chat', 'type'=>'wa'],
                ['icon'=>'handshake',      'title'=>'Konsultasi Kemitraan',  'phone'=>'+62 812-9876-5432', 'wa'=>'6281298765432', 'cta'=>'Hubungi Kemitraan', 'desc'=>'Khusus pendaftaran mitra booth, cek ketersediaan zonasi wilayah, ROI kalkulasi, dan proposal kemitraan.', 'badge'=>'Bisnis & Mitra', 'badgeColor'=>'bg-primary/10 text-primary', 'btnColor'=>'bg-primary hover:bg-primary-container text-on-primary', 'btnIcon'=>'forum', 'type'=>'wa'],
                ['icon'=>'alternate_email','title'=>'Email Perusahaan',     'phone'=>'halo@takoyakinusantara.id', 'wa'=>null, 'cta'=>'Kirim Email Resmi', 'desc'=>'Untuk penawaran sponsorship, vendor bahan baku, pengadaan korporasi, dan korespondensi legal.', 'badge'=>'Formal / Legal', 'badgeColor'=>'bg-secondary/10 text-secondary', 'btnColor'=>'bg-surface-container-high hover:bg-surface-container-highest text-on-surface', 'btnIcon'=>'mail', 'type'=>'email'],
                ['icon'=>'tag',            'title'=>'Media Sosial Resmi',   'phone'=>'@takoyakinusantara', 'wa'=>null, 'cta'=>'Kunjungi IG & TikTok', 'desc'=>'Instagram resmi (48k+ followers, DM aktif) & TikTok untuk live demo & promo harian.', 'badge'=>'Komunitas', 'badgeColor'=>'bg-surface-variant text-on-surface-variant', 'btnColor'=>'bg-surface-container-high hover:bg-surface-container-highest text-on-surface', 'btnIcon'=>'photo_camera', 'type'=>'social'],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($channels as $c)
                <div class="bg-surface-container-lowest rounded-2xl p-5 shadow-sm hover:shadow-md transition-all flex flex-col justify-between group">
                    <div>
                        <div class="w-12 h-12 rounded-xl bg-primary/10 text-primary flex items-center justify-center mb-3 group-hover:bg-primary group-hover:text-on-primary transition-colors">
                            <span class="material-symbols-outlined text-[26px]">{{ $c['icon'] }}</span>
                        </div>
                        <span class="inline-block {{ $c['badgeColor'] }} text-[10.5px] font-bold px-2 py-0.5 rounded-full mb-1">{{ $c['badge'] }}</span>
                        <h3 class="text-[16px] font-bold text-on-surface">{{ $c['title'] }}</h3>
                        <p class="text-[14px] text-primary font-bold mt-1 {{ $c['type']==='email' ? 'truncate' : '' }}">{{ $c['phone'] }}</p>
                        <p class="text-[12px] text-on-surface-variant mt-2 leading-relaxed">{{ $c['desc'] }}</p>
                    </div>

                    <div class="pt-4 mt-3">
                        @if($c['type'] === 'wa')
                            <a href="https://wa.me/{{ $c['wa'] }}" target="_blank" rel="noopener"
                               class="w-full inline-flex items-center justify-center gap-2 {{ $c['btnColor'] }} px-4 py-2.5 rounded-xl text-[12.5px] font-bold transition-all shadow-sm">
                                <span class="material-symbols-outlined text-[17px]">{{ $c['btnIcon'] }}</span>
                                <span>{{ $c['cta'] }}</span>
                            </a>
                        @elseif($c['type'] === 'email')
                            <a href="mailto:{{ $c['phone'] }}"
                               class="w-full inline-flex items-center justify-center gap-2 {{ $c['btnColor'] }} px-4 py-2.5 rounded-xl text-[12.5px] font-bold transition-all">
                                <span class="material-symbols-outlined text-[17px]">{{ $c['btnIcon'] }}</span>
                                <span>{{ $c['cta'] }}</span>
                            </a>
                        @else
                            <div class="flex gap-2">
                                <a href="{{ config('site.instagram') }}" target="_blank" rel="noopener"
                                   class="flex-1 inline-flex items-center justify-center gap-1 bg-surface-container-high hover:bg-surface-container-highest text-on-surface py-2 rounded-xl text-[12px] font-bold transition-all">
                                    <span class="material-symbols-outlined text-[15px]">photo_camera</span> IG
                                </a>
                                <a href="{{ config('site.tiktok') }}" target="_blank" rel="noopener"
                                   class="flex-1 inline-flex items-center justify-center gap-1 bg-surface-container-high hover:bg-surface-container-highest text-on-surface py-2 rounded-xl text-[12px] font-bold transition-all">
                                    <span class="material-symbols-outlined text-[15px]">music_note</span> TikTok
                                </a>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>