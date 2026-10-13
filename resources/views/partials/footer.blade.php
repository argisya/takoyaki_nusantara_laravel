<footer class="w-full bg-surface-container-low text-on-surface py-12 mt-10">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-10">

            <div class="flex flex-col gap-3">
                <span class="font-headline-sm text-primary">{{ config('site.name') }}</span>
                <p class="text-[13px] text-on-surface-variant leading-relaxed">
                    Sajian takoyaki khas Jepang berpadu rempah autentik nusantara.
                </p>
                <div class="inline-flex items-center gap-1.5 bg-tertiary/10 px-2.5 py-1.5 rounded-lg w-fit">
                    <span class="material-symbols-outlined text-tertiary text-[16px]">verified</span>
                    <span class="text-[10px] text-tertiary font-bold uppercase tracking-wider">100% Halal Certified</span>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <h4 class="font-bold text-[15px]">Jaringan Outlet</h4>
                <p class="text-[13px] text-on-surface-variant">50+ outlet di Jakarta, Bandung, Surabaya, Yogyakarta, Bali.</p>
                <a href="#outlet" class="text-[12px] text-primary font-bold">Cari Cabang →</a>
            </div>

            <div class="flex flex-col gap-2">
                <h4 class="font-bold text-[15px]">Jam Operasional</h4>
                <div class="flex items-start gap-2">
                    <span class="material-symbols-outlined text-primary text-[18px]">schedule</span>
                    <div>
                        <p class="text-[13px]">Senin - Minggu</p>
                        <p class="text-[12px] text-on-surface-variant">10:00 - 22:00 WIB</p>
                    </div>
                </div>
            </div>

            <div class="flex flex-col gap-2">
                <h4 class="font-bold text-[15px]">Hubungi Kami</h4>
                @php $wa = 'https://wa.me/'.config('site.whatsapp'); @endphp
                <a href="{{ $wa }}" class="flex items-center gap-2 text-[13px] text-on-surface-variant hover:text-primary">
                    <span class="material-symbols-outlined text-[16px]">chat</span> WhatsApp Order
                </a>
                <a href="{{ config('site.instagram') }}" class="flex items-center gap-2 text-[13px] text-on-surface-variant hover:text-primary">
                    <span class="material-symbols-outlined text-[16px]">photo_camera</span> Instagram
                </a>
                <a href="{{ config('site.tiktok') }}" class="flex items-center gap-2 text-[13px] text-on-surface-variant hover:text-primary">
                    <span class="material-symbols-outlined text-[16px]">music_note</span> TikTok
                </a>
            </div>
        </div>

        <div class="pt-6 border-t border-outline-variant/40 flex flex-col sm:flex-row items-center justify-between gap-3">
            <p class="text-[12px] text-on-surface-variant">© {{ date('Y') }} {{ config('site.name') }}. All rights reserved.</p>
            <div class="flex items-center gap-4">
                <a href="#" class="text-[12px] text-on-surface-variant hover:text-on-surface">Kebijakan Privasi</a>
                <a href="#" class="text-[12px] text-on-surface-variant hover:text-on-surface">Syarat & Ketentuan</a>
            </div>
        </div>
    </div>
</footer>