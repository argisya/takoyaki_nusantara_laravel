<section class="w-full py-14 bg-surface-container-low/70 border-t border-outline-variant/30" id="gallery-grid-section">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop flex flex-col gap-8">

        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4">
            <div>
                <span class="text-[11px] text-primary uppercase tracking-wider font-bold">Koleksi Dokumentasi Lengkap</span>
                <h2 class="text-[24px] md:text-[36px] font-bold text-on-surface mt-1">Aktivitas Gerai, Pelatihan, & Produk</h2>
            </div>
            <div class="flex items-center gap-2 text-on-surface-variant text-[12px] bg-white/80 px-4 py-1.5 rounded-full border border-outline-variant/30 shadow-sm">
                <span class="w-2 h-2 rounded-full bg-tertiary"></span>
                <span>Menampilkan <strong>12</strong> Dokumentasi Pilihan</span>
            </div>
        </div>

        @php
            $cards = [
                ['cat'=>'festival', 'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuAFNP9FQmlIbC42X2NQV_YEig4nJp48vVOrQD5YGy-EMvrZCmuTJCc_lCyIuIcoZBumtxrur8iuwL0dV23RhcGzI9CcCIbXpHdcOqrGTo3AZGlpBWaEYdaV6WpSQw_KuKp7tt1WOGc2rUr_rE45AKI9DqaSmwKUIMyKiCMoq5sJh0icvOWbjkzgjQ1yMYGHxrI5boSF78fHXtz0C1162l7QFIuBR8s3vdrYHXesVW1X', 'badge'=>'Event', 'badgeColor'=>'bg-primary text-on-primary', 'title'=>'Grand Opening Cabang Yogyakarta', 'desc'=>'Peresmian outlet baru dengan potong tumpeng & promo beli 1 gratis 1 yang dipadati warga lokal.', 'meta'=>'Cabang Gejayan • 12 Jan 2025'],
                ['cat'=>'menu', 'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuASD26MclkCldLQAbQmKYjdT9Z8KfwwpAh1WKwgaD6ewPIi6CWHD1L9JmspWRdoFeF3V4Oh2a3N_keXzwErNsIfARZej77IWnaCXSrgFBRG2FMNrNoOgtsyryMvISWD0VatQujkHClx4MxjJAWYr5xNqet_kMzNTSkEGK4sRsJgKcVnbgmPGf3LdaZ3JfVMjpvKkWbwGvPxz-ZWsVk0rQ7YxHf4CIaAHaoZJeCF5ZO2', 'badge'=>'Menu Produk', 'badgeColor'=>'bg-tertiary-container text-on-tertiary-container', 'title'=>'Takoyaki Mozzarella Melt Tarikan Keju', 'desc'=>'Sensasi keju premium molor berpadu saus takoyaki gurih dan chili flakes pedas nusantara.', 'meta'=>'Menu Spesial Signature'],
                ['cat'=>'pelanggan', 'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuCBGSImrhDOSqkZ1mbhEZYrwUsNeLQ4O7bcbu3d8xhlfEpxyrHbdtPs1wQQ-NuGDEhQ_PmmzmNYm0QX_hnYwzymHCWyIDiIhLXNq8hPxKgcE5ZGdT3LaQLNwVeSXlxkUEEmx9RC_2v4OiJdiENTJ0GJ50MxRSyF6eGTKv36flFdyW3C1qopquJk8ClgpJlaw-tTK3cIBOIzTAQZ-P21Iy47T9hC2If331glq606A5se', 'badge'=>'Pelatihan Mitra', 'badgeColor'=>'bg-surface-container-high text-on-surface', 'title'=>'Pelatihan SOP & Koki Mitra Baru', 'desc'=>'Sesi bimbingan intensif standardisasi racikan adonan dan kecepatan serving time di bawah 4 menit.', 'meta'=>'Training Academy Pusat'],
                ['cat'=>'dapur', 'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuByB4dqEHqSwVS_gFLAG2uELffFjTatIR6mKYY3CRvIpjvdndIbM20LRVvwGI4KY47X1Xaz2IpX5ajO1h80dlYSTaQYaGtMOD1vHId_CNHEyNNPei3zne-BDYiHKUGdRblNZV75eja7AQLVcMKynPRit9sdCjfnK4V3ZjuFAs4IZUxzqu_cNoxKZrD_gm3vRXUymaC85hT3a9fR5Po2GtQ4EafS8VGlY-nKxDkEOFk1', 'badge'=>'Distribusi', 'badgeColor'=>'bg-primary text-on-primary', 'title'=>'Distribusi Bahan Baku Rantai Dingin', 'desc'=>'Armada berpendingin memastikan daging gurita & adonan premix tiba dalam kesegaran sempurna di 75+ gerai.', 'meta'=>'Hub Logistik Jabodetabek & Jatim'],
                ['cat'=>'festival', 'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuAZ1pKD8rKmxK1lUOxmgCUaFxNl0oa27vWiCO2rv-iSYoLA33tVYJpHhfpNTnGCuIkV1-QmuYiTNDPSVEkjzIIBiuij0YPxnfEE7dXVQYIAkj6XLIKRP4VkbsR60pI5YJPbitSIsZo8qwzsFsnB5hPKGmUD8b_qXPvhljJa9z1StrWSILnMJYpGrvJKTEtqBn6be5XfmLqWtsWBzIp-ScaHVL0nZHlHrBbOeYo-3s_6', 'badge'=>'Event', 'badgeColor'=>'bg-primary text-on-primary', 'title'=>'Keseruan Bazar Kampus UI & ITB', 'desc'=>'Menjadi jajanan favorit mahasiswa selama pekan seni budaya kampus dengan penjualan lebih dari 800 box.', 'meta'=>'Kampus Tour Roadshow'],
                ['cat'=>'menu', 'img'=>'https://lh3.googleusercontent.com/aida/AEtjO1WZx_mRjXUqaCZFqiNmdHFUCj0TKGozUwtBbs27dTXbZiSB4jh1agC0Q_4oLvkGaMrxr35OwUrtHEpXv0dXWvapcZVE_e6cRwy2Bj0RGOaKBYfODVdVfJmqQIrFJRXMQv3jrLy6qsmNXpLr5bgZsvFv3tbKRmHLS0szGIwV5yKj0LbGVWFhH-WQtE7xx0AI8kMinxziXLgWf-UV5LeKJIf2SjUNtXqCFCFRuDmwNbE1Rw', 'badge'=>'Kualitas Baku', 'badgeColor'=>'bg-tertiary-container text-on-tertiary-container', 'title'=>'Bahan Baku Segar & Alami', 'desc'=>'Gurita berkualitas, saus bumbu khas nusantara, dan katsuobushi pilihan tanpa pengawet berbahaya.', 'meta'=>'100% Pilihan Berkualitas'],
                ['cat'=>'booth', 'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuBmrv2nzRMrWy_K7jKKxOGkIBBdrboSRbecy_ch5xuIYYz8W091dZbVqKzddE33TeR1VVr4Bubl1AxdDjLLh0r9b_sSV3ATSKBun7nyBJ81le0djP2z5VB5otLwF8r6jsEFHYkLxCzvBMVm_rsEnSqbPO-qlZO9MEAV2t0tOkehsCI3h3qIn0cxT3s_aLbOgQidzncUVPqNCWaPpK0xq7F5otuf9TRARcnRu_QXVXYh', 'badge'=>'Booth & Gerai', 'badgeColor'=>'bg-surface-container-high text-on-surface', 'title'=>'Suasana Gerai Estetik Malam Hari', 'desc'=>'Pencahayaan temaram hangat dan neon box ikonis menjadikannya spot jajan favorit saat malam santai.', 'meta'=>'Cabang Bintaro Sektor 9'],
                ['cat'=>'dapur', 'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuBlPmdkJmdINlT7roij3OIDfScvRbEl317QMv4LCjk48RFfwjrtpLjG5hbf7HJal7l5caOYUYMw_StgqMbt6DzHcHFpGQoLiJW9f1PeOL8gT87ZoGqUBCJd8zcbYfKtT4GGPafO-ps5ivKPksQBFwGH-471Gis24exFWYQ7BJT3m-uN3FAbgWR9UWaoFRrKCkjMYQAyUFHOrDzcsWVgYLRa-ty1KPlnX5lceHp9uH_c', 'badge'=>'Quality Control', 'badgeColor'=>'bg-tertiary-container text-on-tertiary-container', 'title'=>'Uji Mutu Laboratorium Berkala', 'desc'=>'Pemeriksaan ketat kadar higienitas dan formulasi adonan sesuai regulasi keamanan pangan BPOM RI.', 'meta'=>'Lab Quality Control Sentral'],
                ['cat'=>'pelanggan', 'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuBhyBszVWF-Vs6KTAf3U5XABZ1QIfEKB16bYpajMuVkUwHPDY0flVp-DS57HVAOQU-1hBrQujZHRPOYo9xrwcINUdqpDJjW5USRqj3-7lO0r4nAtlJGVDwVw0C3_umQ_F_3rhvTbPaMSXQpf0DiBCLWcsnLHEBNXSg_hZz-BI4iHIOq0mjqBpMWe6GjsNyQ9A9vQOn694m_y6z3cML4L7hFNFiY8kexKPyZj1u6t_9_', 'badge'=>'Komunitas', 'badgeColor'=>'bg-primary text-on-primary', 'title'=>'Mitra Gathering & Evaluasi Tahunan', 'desc'=>'Sinergi antara manajemen pusat dan seluruh pemilik booth untuk strategi ekspansi pasar 2025.', 'meta'=>'Annual Partner Summit Jakarta'],
                ['cat'=>'menu', 'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuBmARtMWYk4jx8-wRaoSPQq2RHabwLPz83vaV25Xmn8J2sC3o5KOPGIBchYyXJPkuwCYNe3aE4THf03a4FdbThVXFWi2PBv8rDcC7u4eE3We_70_tzFBEaN6uOUR3XXXJkM6dFvay3F8iHQx4-E_TJqY3uwznrF9YsJgRzo-7sI6VFCKQ01FockqsYCU6Ej34foP8ogjPT_JCyOVUVVsl63G3lYUO4p9P-TCPpcH4jr', 'badge'=>'Packaging', 'badgeColor'=>'bg-tertiary-container text-on-tertiary-container', 'title'=>'Kemasan Bento Box Ramah Lingkungan', 'desc'=>'Kotak makanan berbahan kertas food-grade yang mempertahankan kerenyahan takoyaki saat take away.', 'meta'=>'Inovasi Eco-Friendly Packaging'],
                ['cat'=>'pelanggan', 'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuBoeuO5ecE_HRkYuwejabVH5QAhljmyC0irBwWgylui9x9nOg_WDYju5FHg2-XCE9WTa_5hOhG0VqH4tzM5VOG561BCGeiy5GJMyuaN4fM9iKyvsOCkSVHEO5GaBKctnOVsT4C0L3RUgCz0Kjg1PVDMhoVL-lWRN3qCeGTBCfoAAMCHS-9kPq2yKI27MEXL1wHJRPbBdBtxWlLUnKpGz7O9ZfvnRdOqeetzALBeXEiv', 'badge'=>'CSR Sosial', 'badgeColor'=>'bg-primary text-on-primary', 'title'=>'Jumat Berkah Berbagi Takoyaki', 'desc'=>'Aksi rutin tim Takoyaki Nusantara membagikan lebih dari 300 porsi gratis bagi masyarakat sekitar gerai.', 'meta'=>'Program Sosial Berkelanjutan'],
                ['cat'=>'booth', 'img'=>'https://lh3.googleusercontent.com/aida-public/AB6AXuCAfHdvDTcg0-HnXcW1N0y_LOqhAauhIFKMw6HK8VCdqAdwPelNNiVfMayLLWXe9aZ6IIqyLkZ-bl95c5oy5M06EP9s142PitvL5htB9SW5G_9pTRUyCbtZ_2G5AIuY9bPTAdDJbVY34eI8s9jGp7UDl3o3VMcRPU2OIXp9OaktLk9Hf-wxWvH5na3sUya2cKnPPBL80E9436_pTnSlNS-H9yy6Ncn2nKiK9jnkbUJK', 'badge'=>'Gerai Mall', 'badgeColor'=>'bg-surface-container-high text-on-surface', 'title'=>'Island Counter Mall Tangerang', 'desc'=>'Konsep counter indoor modern berkapasitas pesanan tinggi yang cocok untuk area pusat perbelanjaan.', 'meta'=>'Supermall Karawaci Lantai LG'],
            ];
        @endphp

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-5" id="gallery-card-container">
            @foreach($cards as $c)
                <div class="gallery-card bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1.5 group flex flex-col border border-outline-variant/30" data-cat="{{ $c['cat'] }}">
                    <div class="relative h-56 overflow-hidden">
                        <img class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500" alt="{{ $c['title'] }}" loading="lazy" src="{{ $c['img'] }}">
                        <span class="absolute top-3 left-3 px-2.5 py-1 rounded-full {{ $c['badgeColor'] }} text-[10.5px] font-semibold shadow">{{ $c['badge'] }}</span>
                    </div>
                    <div class="p-4 flex flex-col flex-1 justify-between gap-2 bg-white">
                        <div>
                            <h5 class="text-[15px] font-bold text-on-surface line-clamp-1 group-hover:text-primary transition-colors">{{ $c['title'] }}</h5>
                            <p class="text-[12px] text-on-surface-variant mt-1 line-clamp-2 leading-relaxed">{{ $c['desc'] }}</p>
                        </div>
                        <span class="text-[10.5px] text-on-surface-variant/70">{{ $c['meta'] }}</span>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>