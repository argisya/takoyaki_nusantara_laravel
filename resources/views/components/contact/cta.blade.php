<section class="w-full py-16">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="relative overflow-hidden bg-gradient-to-r from-primary via-primary-container to-secondary rounded-3xl p-6 md:p-10 text-on-primary shadow-xl">
            <div class="relative z-10 flex flex-col lg:flex-row items-center justify-between gap-6 text-center lg:text-left">

                <div class="max-w-2xl flex flex-col gap-3">
                    <span class="inline-flex items-center gap-2 bg-white/15 backdrop-blur-md px-3 py-1 rounded-full w-fit mx-auto lg:mx-0">
                        <span class="material-symbols-outlined text-[16px]">flash_on</span>
                        <span class="text-[10.5px] uppercase font-bold tracking-wider">Layanan Langsung Hari Ini</span>
                    </span>
                    <h2 class="text-[26px] md:text-[42px] leading-tight font-extrabold">
                        Butuh Respon Cepat Sekarang?
                    </h2>
                    <p class="text-[14px] md:text-[16px] opacity-90 leading-relaxed">
                        Langsung terhubung dengan Customer Care officer kami melalui WhatsApp untuk pemesanan darurat, katering mendadak, atau tanya jawab kemitraan.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row items-center gap-3 shrink-0 w-full sm:w-auto">
                    @php
                        $wa = 'https://wa.me/'.config('site.whatsapp').'?text='.urlencode('Halo CS Takoyaki Nusantara, saya ingin bertanya.');
                    @endphp
                    <a href="{{ $wa }}" target="_blank" rel="noopener"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-surface-container-lowest text-primary hover:bg-surface px-5 py-3.5 rounded-xl text-[14px] font-bold shadow-md active:scale-95 transition-all">
                        <span class="material-symbols-outlined text-[20px]">chat</span>
                        <span>WhatsApp CS Pusat</span>
                    </a>
                    <a href="tel:+{{ config('site.whatsapp') }}"
                       class="w-full sm:w-auto inline-flex items-center justify-center gap-2 bg-white/20 hover:bg-white/30 text-on-primary px-5 py-3.5 rounded-xl text-[13.5px] font-semibold backdrop-blur-sm transition-all">
                        <span class="material-symbols-outlined text-[18px]">call</span>
                        <span>Telepon Langsung</span>
                    </a>
                </div>
            </div>

            <div class="absolute -right-12 -top-12 w-64 h-64 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>
            <div class="absolute -left-12 -bottom-12 w-64 h-64 bg-secondary/30 rounded-full blur-3xl pointer-events-none"></div>
        </div>
    </div>
</section>