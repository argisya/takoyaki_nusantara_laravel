<section class="w-full py-14 bg-surface">
    <div class="max-w-[1280px] w-full mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="relative bg-gradient-to-r from-primary via-primary-container to-secondary-container rounded-3xl p-6 md:p-10 overflow-hidden shadow-2xl text-on-primary">
            <div class="absolute -right-20 -bottom-20 w-80 h-80 bg-secondary/30 rounded-full blur-2xl pointer-events-none"></div>

            <div class="relative z-10 flex flex-col lg:flex-row lg:items-center justify-between gap-8">
                <div class="flex flex-col gap-3 max-w-2xl">
                    <span class="inline-flex items-center gap-1.5 bg-white/15 px-3 py-1 rounded-full w-fit backdrop-blur text-[11px] font-bold uppercase tracking-wider">
                        <span class="material-symbols-outlined text-[16px]">delivery_dining</span>
                        Pengiriman Cepat & Hangat
                    </span>
                    <h2 class="font-bold text-[24px] md:text-[32px] leading-tight">
                        Lapar Sore Ini? Nikmati Takoyaki Hangat Sekarang!
                    </h2>
                    <p class="text-[14px] md:text-[15px] opacity-90 leading-relaxed">
                        Camilan renyah lembut dengan saus teriyaki dan katsuobushi siap meluncur ke depan pintu rumah Anda.
                    </p>
                </div>

                @php
                    $wa = 'https://wa.me/'.config('site.whatsapp').'?text='.urlencode(config('site.whatsapp_text'));
                @endphp

                <div class="flex flex-col sm:flex-row gap-3 shrink-0">
                    <a href="{{ $wa }}" target="_blank"
                       class="inline-flex items-center justify-center gap-2 bg-white text-primary px-6 py-3.5 rounded-xl font-bold shadow-lg hover:shadow-xl transition-all">
                        <span class="material-symbols-outlined text-[20px]">chat</span>
                        Pesan via WhatsApp
                    </a>
                    <a href="{{ route('partnership') }}"
                       class="inline-flex items-center justify-center gap-2 bg-white/15 hover:bg-white/25 text-white px-6 py-3.5 rounded-xl font-semibold backdrop-blur transition-all">
                        <span class="material-symbols-outlined text-[20px]">handshake</span>
                        Kemitraan
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>