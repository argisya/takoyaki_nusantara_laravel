<section class="w-full py-16 mt-6 bg-surface-container-low">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-stretch">

            {{-- Party Catering --}}
            <div class="lg:col-span-7 bg-surface-container-lowest rounded-2xl p-6 shadow-sm flex flex-col justify-between">
                <div>
                    <span class="inline-flex items-center gap-2 bg-tertiary/10 text-tertiary px-3 py-1 rounded-full text-[10.5px] font-bold mb-3">
                        <span class="material-symbols-outlined text-[15px]">celebration</span>
                        Layanan Katering & Pesanan Partai Besar
                    </span>
                    <h2 class="text-[22px] md:text-[26px] font-bold text-on-surface">
                        Pesan Hangat Untuk Event Kantor, Arisan & Syukuran
                    </h2>
                    <p class="text-[13.5px] text-on-surface-variant mt-2 leading-relaxed">
                        Untuk pesanan di atas 5 box, kami sediakan jalur koordinasi prioritas langsung bersama Owner Pusat. Dilengkapi box packaging thermal food-grade agar kerenyahan & suhu takoyaki tetap prima hingga lokasi acara.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3 mt-4">
                        @php
                            $checkpoints = [
                                'Live Cooking Booth on-site untuk pernikahan / bazar',
                                'Harga bundel khusus & free katsuobushi ekstra',
                                'Bebas mix 4 varian topping nusantara & jepang',
                                'Pengiriman terjadwal presisi waktu tanpa delay',
                            ];
                        @endphp
                        @foreach($checkpoints as $c)
                            <div class="flex items-start gap-2">
                                <span class="material-symbols-outlined text-primary text-[18px] shrink-0 mt-0.5">check_circle</span>
                                <span class="text-[12.5px] text-on-surface leading-relaxed">{{ $c }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="mt-6 pt-4 border-t border-outline-variant/30 flex flex-wrap items-center gap-4">
                    @php
                        $waParty = 'https://wa.me/'.config('site.whatsapp').'?text='.urlencode('Halo Owner Pusat, saya ingin konsultasi pemesanan katering partai besar.');
                    @endphp
                    <a href="{{ $waParty }}" target="_blank" rel="noopener"
                       class="inline-flex items-center gap-2 bg-primary hover:bg-primary-container text-on-primary px-5 py-2.5 rounded-xl text-[13.5px] font-bold shadow-md transition-all">
                        <span class="material-symbols-outlined text-[18px]">chat</span>
                        Chat WhatsApp Owner Sekarang
                    </a>
                    <span class="text-[11.5px] text-on-surface-variant">Bisa invoice perusahaan & faktur resmi</span>
                </div>
            </div>

            {{-- Partnership Teaser --}}
            <div class="lg:col-span-5 bg-surface-container rounded-2xl p-6 shadow-sm flex flex-col justify-between">
                <div>
                    <div class="w-12 h-12 rounded-xl bg-secondary-container/30 flex items-center justify-center text-on-secondary-container mb-3">
                        <span class="material-symbols-outlined text-[24px]">handshake</span>
                    </div>
                    <h3 class="text-[20px] font-bold text-on-surface">Buka Booth di Kotamu?</h3>
                    <p class="text-[13px] text-on-surface-variant mt-2 leading-relaxed">
                        Bergabunglah dengan jaringan kemitraan Takoyaki Nusantara. Bisnis street food ROI cepat, SOP teruji, pasokan Central Kitchen Halal, dan dukungan marketing penuh.
                    </p>

                    <div class="mt-4 p-3 bg-surface-container-lowest rounded-xl flex items-center justify-between">
                        <div>
                            <p class="text-[10.5px] text-on-surface-variant">Paket Booth Lengkap</p>
                            <p class="text-[16px] font-bold text-primary">Mulai Rp 14.5 Jt</p>
                        </div>
                        <span class="text-[10.5px] bg-tertiary/10 text-tertiary px-3 py-1 rounded-md font-bold">Siap Jualan</span>
                    </div>
                </div>

                <div class="mt-6">
                    <a href="{{ route('partnership') }}"
                       class="w-full inline-flex items-center justify-center gap-2 bg-on-surface text-surface hover:bg-inverse-surface py-3 rounded-xl text-[13px] font-semibold transition-all">
                        <span>Lihat Detail Kemitraan</span>
                        <span class="material-symbols-outlined text-[16px]">arrow_forward</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>