<section class="relative w-full overflow-hidden bg-gradient-to-b from-surface via-surface-container-low to-surface py-4 sm:py-6 lg:py-8" aria-label="Banner dan pemesanan Takoyaki Nusantara">
    <div class="pointer-events-none absolute -left-20 -top-32 h-96 w-96 rounded-full bg-primary/10 blur-3xl"></div>
    <div class="pointer-events-none absolute -right-24 top-1/2 h-80 w-80 rounded-full bg-secondary-container/20 blur-3xl"></div>

    <div class="relative z-10 mx-auto w-full max-w-[1280px] px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="mx-auto w-full max-w-[960px]">
            <div class="overflow-hidden rounded-3xl border border-outline-variant/50 bg-surface-container-low p-1.5 shadow-2xl">
                <img
                    src="{{ asset('images/banner-tako.webp') }}"
                    alt="Banner Takoyaki Nusantara, takoyaki Jepang otentik dengan cita rasa rempah Nusantara, gurita asli, saus melimpah, dan dibuat segar saat dipesan"
                    class="block h-auto w-full rounded-2xl"
                >
            </div>

            @php
                $waLink = 'https://wa.me/'.config('site.whatsapp').'?text='.urlencode(config('site.whatsapp_text'));
            @endphp
            <div class="mt-3 flex flex-col items-center gap-2">
                <div class="flex w-full flex-col justify-center gap-2 sm:w-auto sm:flex-row">
                    <a href="{{ $waLink }}" target="_blank" rel="noopener"
                       class="inline-flex items-center justify-center gap-2 rounded-xl bg-primary px-5 py-2.5 font-label-lg text-on-primary shadow-lg transition-all hover:bg-primary-container hover:shadow-xl">
                        <span class="material-symbols-outlined text-[20px]">chat</span>
                        Pesan via WhatsApp
                    </a>
                    <a href="#menu-populer"
                       class="inline-flex items-center justify-center gap-2 rounded-xl bg-surface-container-lowest px-5 py-2.5 font-label-lg text-on-surface shadow-sm transition-all hover:bg-surface-container-high">
                        <span class="material-symbols-outlined text-[20px] text-primary">restaurant_menu</span>
                        Lihat Menu
                    </a>
                </div>

                <div class="flex flex-wrap items-center justify-center gap-2">
                    <span class="font-label-sm text-[11px] font-bold uppercase tracking-wider text-on-surface-variant">
                        Tersedia di:
                    </span>
                    @foreach(['GoFood' => '#00AA13', 'ShopeeFood' => '#EE4D2D', 'GrabFood' => '#00B14F'] as $p => $c)
                        <div class="inline-flex items-center gap-1.5 rounded-lg border border-outline-variant/40 bg-surface-container-lowest px-3 py-1 shadow-sm">
                            <span class="h-2.5 w-2.5 rounded-full" style="background: {{ $c }}"></span>
                            <span class="font-label-sm text-[11px] font-bold text-on-surface">{{ $p }}</span>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>