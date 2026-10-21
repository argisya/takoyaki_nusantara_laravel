<section class="w-full py-16 lg:py-20 bg-surface" id="cerita-kami">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12">

            {{-- Story + Quote --}}
            <div class="lg:col-span-5 flex flex-col gap-6">
                <div class="flex flex-col gap-4">
                    <span class="text-[11px] text-primary uppercase tracking-widest font-bold">Tentang Kami</span>
                    <h2 class="text-[26px] lg:text-[32px] font-bold text-on-surface tracking-tight leading-tight">
                        Berawal dari Keinginan untuk Berwirausaha
                    </h2>
                    <div class="flex flex-col gap-3 text-[14px] text-on-surface-variant leading-relaxed">
                        <p>Takoyaki Nusantara berdiri pada tahun 2024, berawal dari keinginan seorang mahasiswa untuk membangun usaha kuliner yang tidak hanya menghasilkan keuntungan, tetapi juga memiliki potensi untuk berkembang dan memberikan manfaat bagi lebih banyak orang.</p>
                        <p>Dengan memulai dari skala kecil, Takoyaki Nusantara terus belajar memahami selera pasar, mengembangkan kualitas produk, serta membangun sistem operasional yang lebih baik.</p>
                        <p>Seiring berjalannya waktu, usaha ini terus berkembang melalui pengembangan produk, peningkatan sistem operasional, serta pembukaan outlet di berbagai lokasi.</p>
                        <p>Saat ini, Takoyaki Nusantara telah berkembang menjadi brand kuliner dengan 7 cabang aktif dan mulai membuka kesempatan bagi masyarakat untuk ikut tumbuh melalui sistem kemitraan.</p>
                    </div>
                </div>

                <div class="relative rounded-2xl overflow-hidden shadow-md">
                    <img alt="Takoyaki autentik" class="w-full h-48 object-cover"
                         src="https://lh3.googleusercontent.com/aida/AEtjO1WTr9sZy5VBJcnKTdt1AQlX4tVcON5qX65NBntNcBK3q_CNQ-a-O_EJjG9mCqXW77zd5dZAvlmICc_nBESyMG6An4gHaTQsMbPXS4QPNkPIfly1NDcZ9NjsgF9JXyZnULliX3XYu6kykiiMheWlxHEVMhhEMZRp81p1Bo5i_Cm1-fN2z1nSVlADv18U5ua9sRV0fsF9vCgUiXzhLH2wl8Vq5A2ygvdD8bp7iixcBHsHg7D3vlGYmrgs9Ik">
                    <div class="absolute bottom-2 left-2 bg-white/95 backdrop-blur-md px-2.5 py-1 rounded-lg flex items-center gap-1 text-[11px] font-semibold text-primary shadow-sm">
                        <span class="material-symbols-outlined text-[14px]">restaurant</span>
                        <span>Sajian Asli Takoyaki Nusantara</span>
                    </div>
                </div>

                <blockquote class="bg-surface-container p-5 rounded-2xl shadow-sm relative overflow-hidden">
                    <span class="material-symbols-outlined text-outline-variant text-[60px] absolute -right-2 -bottom-2 opacity-40">format_quote</span>
                    <p class="text-[15px] italic relative z-10 leading-snug text-on-surface">
                        "Kami percaya bahwa bisnis yang baik bukan hanya tentang menjual produk, tetapi juga tentang menciptakan sistem yang dapat berkembang, menjaga kualitas, dan memberikan peluang bagi lebih banyak orang."
                    </p>
                    <div class="mt-4 flex items-center gap-3 relative z-10">
                        <div class="w-10 h-10 rounded-full bg-primary flex items-center justify-center text-on-primary font-bold text-[13px]">TN</div>
                        <div class="leading-tight">
                            <p class="text-[12px] font-bold">Founder</p>
                            <p class="text-[11px] text-on-surface-variant">Takoyaki Nusantara</p>
                        </div>
                    </div>
                </blockquote>
            </div>

            {{-- Timeline Perkembangan Kami --}}
            <div class="lg:col-span-7 flex flex-col justify-center">
                <div class="bg-surface-container-low p-6 md:p-8 rounded-2xl">
                    <div class="flex items-center justify-between mb-6">
                        <h3 class="text-[20px] font-bold text-on-surface">Perkembangan Kami</h3>
                        <span class="text-[10px] bg-surface-container-highest text-on-surface-variant px-2 py-1 rounded-full uppercase tracking-wider font-semibold">2024 — Sekarang</span>
                    </div>

                    @php
                        $timeline = [
                            [
                                'yr'=>'24',
                                'color'=>'primary',
                                'badge'=>'Langkah Awal',
                                'title'=>'2024 — Memulai Perjalanan',
                                'desc'=>'Takoyaki Nusantara didirikan dari sebuah usaha kuliner yang dirintis oleh mahasiswa dengan semangat untuk membangun bisnis secara mandiri.'
                            ],
                            [
                                'yr'=>'02',
                                'color'=>'secondary',
                                'badge'=>'Fokus Kualitas',
                                'title'=>'Pengembangan Produk & Sistem',
                                'desc'=>'Bisnis terus dikembangkan melalui peningkatan kualitas produk, operasional, serta penyesuaian dengan kebutuhan dan keinginan pasar.'
                            ],
                            [
                                'yr'=>'03',
                                'color'=>'tertiary',
                                'badge'=>'Jangkauan Luas',
                                'title'=>'Ekspansi Outlet',
                                'desc'=>'Takoyaki Nusantara mulai memperluas jangkauan dengan membuka beberapa titik penjualan di berbagai lokasi.'
                            ],
                            [
                                'yr'=>'07',
                                'color'=>'primary-container',
                                'badge'=>'Kemitraan Terbuka',
                                'title'=>'Saat Ini — 7 Cabang Aktif',
                                'desc'=>'Takoyaki Nusantara kini memiliki 7 cabang aktif dan terus membuka peluang untuk berkembang melalui sistem kemitraan.'
                            ],
                        ];

                        // Kelas warna ditulis literal agar ter-generate Tailwind (tidak boleh dinamis).
                        $tone = [
                            'primary'           => 'bg-primary text-on-primary',
                            'secondary'         => 'bg-secondary text-on-secondary',
                            'tertiary'          => 'bg-tertiary text-on-tertiary',
                            'primary-container' => 'bg-primary-container text-on-primary-container',
                            'surface-tint'      => 'bg-surface-tint text-on-primary',
                        ];
                    @endphp

                    <div class="space-y-6 relative">
                        @foreach($timeline as $i => $t)
                            <div class="flex items-start gap-4">
                                <div class="flex flex-col items-center shrink-0">
                                    <div class="w-10 h-10 rounded-full {{ $tone[$t['color']] }} flex items-center justify-center font-bold text-[12px] shadow-sm">
                                        {{ $t['yr'] }}
                                    </div>
                                    @if(!$loop->last)
                                        <div class="w-0.5 h-16 bg-outline-variant/60 mt-2"></div>
                                    @endif
                                </div>
                                <div class="bg-surface-container-lowest p-4 rounded-xl shadow-sm w-full">
                                    <div class="flex flex-wrap items-center justify-between gap-2">
                                        <h4 class="text-[15px] font-bold text-on-surface">{{ $t['title'] }}</h4>
                                        <span class="text-[10px] bg-surface-container text-on-surface-variant px-2 py-0.5 rounded font-semibold">{{ $t['badge'] }}</span>
                                    </div>
                                    <p class="text-[13px] text-on-surface-variant mt-1.5 leading-relaxed">{{ $t['desc'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>