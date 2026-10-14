<section class="w-full max-w-[900px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-16">

    <x-section-header
        label="Pertanyaan Umum"
        title="Frequently Asked Questions"
        subtitle="Segala hal yang sering ditanyakan oleh calon mitra sebelum bergabung." />

    @php
        $faqs = [
            ['q'=>'Apakah ada biaya royalti bulanan atau bagi hasil omset?', 'a'=>'Sama sekali tidak ada! Untuk skema mandiri, 100% omset dan keuntungan penjualan adalah milik Anda seutuhnya. Kami tidak membebankan royalty fee bulanan maupun annual franchise fee.'],
            ['q'=>'Bagaimana jika saya belum punya pengalaman bisnis kuliner?', 'a'=>'Jangan khawatir! 80% mitra kami adalah pemula. Tim pusat menyediakan SOP lengkap langkah demi langkah, video tutorial teknik membalik takoyaki, takaran bumbu premix terstandarisasi, serta panduan pelayanan ramah hingga siap grand opening.'],
            ['q'=>'Berapa lama proses dari mendaftar hingga booth siap buka?', 'a'=>'Rata-rata 7-14 hari kerja sejak pembayaran komitmen DP diterima, mencakup proses penyiapan booth, pengecekan fungsi kompor, pengemasan starter pack, dan pengiriman ke lokasi Anda.'],
            ['q'=>'Apakah diperbolehkan menjual menu lain selain Takoyaki di booth?', 'a'=>'Mitra diperbolehkan menjual minuman pendamping non-alkohol seperti es teh, ocha jasmine, atau jus kemasan untuk meningkatkan omset kasir. Namun seluruh varian takoyaki wajib mengikuti resep dan bahan baku standar resmi kami.'],
            ['q'=>'Bagaimana suplai bahan baku untuk cabang di luar pulau Jawa?', 'a'=>'Central kitchen kami terhubung dengan jaringan logistik cold-chain (rantai dingin) terpercaya di seluruh Indonesia, menjangkau kota-kota di Sumatra, Kalimantan, Sulawesi, hingga Bali dan NTB dengan jaminan kesegaran.'],
        ];
    @endphp

    <div class="flex flex-col gap-3">
        @foreach($faqs as $i => $faq)
            <div class="faq-item bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden">
                <button type="button"
                        class="faq-trigger w-full p-4 flex items-center justify-between text-left text-[14px] font-bold text-on-surface hover:text-primary transition-colors gap-3">
                    <span>{{ $faq['q'] }}</span>
                    <span class="material-symbols-outlined transition-transform duration-200 shrink-0">expand_more</span>
                </button>
                <div class="faq-content px-4 pb-4 hidden text-[13px] text-on-surface-variant leading-relaxed">
                    {{ $faq['a'] }}
                </div>
            </div>
        @endforeach
    </div>
</section>