<section class="w-full py-10">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">

            {{-- Map --}}
            <div class="lg:col-span-8 relative bg-surface-container-lowest rounded-2xl p-4 shadow-md overflow-hidden flex flex-col justify-between min-h-[380px]">
                <div class="flex items-center justify-between gap-3 mb-3 relative z-10">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[20px]">explore</span>
                        <h2 class="text-[15px] font-bold text-on-surface">Peta Sebaran Outlet</h2>
                    </div>
                    <span id="gps-live-badge" class="text-[10.5px] bg-primary/10 text-primary px-3 py-1 rounded-full font-bold flex items-center gap-1.5">
                        <span class="w-2 h-2 rounded-full bg-primary inline-block animate-pulse"></span>
                        GPS Live Tracker
                    </span>
                </div>

                {{-- Interactive Map Container --}}
                <div class="relative w-full h-[280px] md:h-[360px] rounded-xl overflow-hidden shadow-inner bg-surface-variant" id="outlet-map-container">
                    {{-- Map is rendered here via JS --}}
                    <div id="outlet-map" class="w-full h-full"></div>

                    {{-- Fallback if JS disabled --}}
                    <noscript>
                        <div class="w-full h-full flex items-center justify-center bg-surface-variant">
                            <p class="text-on-surface-variant text-sm">Aktifkan JavaScript untuk menampilkan peta interaktif.</p>
                        </div>
                    </noscript>
                </div>

                {{-- Legend --}}
                <div class="mt-3 flex items-center justify-between text-on-surface-variant text-[12px] flex-wrap gap-2">
                    <div class="flex flex-wrap items-center gap-2">
                        @php
                            $legends = [
                                ['color'=>'primary',             'text'=>'Bogor: 5 Cabang'],
                                ['color'=>'secondary',           'text'=>'Tangsel: 1 Cabang'],
                                ['color'=>'tertiary-container',  'text'=>'Depok: 1 (Proses)'],
                            ];
                        @endphp
                        @foreach($legends as $l)
                            <span class="px-2.5 py-1 bg-surface-container rounded-lg text-[10.5px] text-on-surface-variant flex items-center gap-1.5 font-medium">
                                <span class="w-2 h-2 rounded-full bg-{{ $l['color'] }} inline-block"></span>
                                {{ $l['text'] }}
                            </span>
                        @endforeach
                    </div>
                    <button id="btn-recenter-map" class="text-primary font-bold hover:underline text-[11.5px] flex items-center gap-1">
                        <span class="material-symbols-outlined text-[14px]">my_location</span>
                        Re-center
                    </button>
                </div>
            </div>

            {{-- Owner Hotline --}}
            <div class="lg:col-span-4 bg-gradient-to-br from-primary-container to-primary text-on-primary rounded-2xl p-6 shadow-md flex flex-col justify-between relative overflow-hidden">
                <div class="absolute -right-8 -top-8 w-40 h-40 bg-white/10 rounded-full blur-2xl pointer-events-none"></div>

                <div>
                    <div class="w-12 h-12 rounded-xl bg-white/20 backdrop-blur-sm flex items-center justify-center mb-4">
                        <span class="material-symbols-outlined text-[26px]">support_agent</span>
                    </div>
                    <span class="text-[10.5px] uppercase tracking-wider bg-white/20 px-3 py-1 rounded-md font-bold">Direct Owner & Central Helpdesk</span>
                    <h3 class="text-[20px] font-bold mt-2 leading-tight">
                        Pesan Partai Besar, Katering, atau Bantuan Outlet?
                    </h3>
                    <p class="text-[12.5px] text-white/90 mt-3 leading-relaxed">
                        Ingin order lebih dari 5 box untuk rapat kantor, pesta arisan, atau menanyakan ketersediaan topping di cabang terdekat? Owner Pusat siap membantu secara real-time.
                    </p>
                </div>

                <div class="mt-6 pt-4 border-t border-white/20 flex flex-col gap-2">
                    @php
                        $waOwner = 'https://wa.me/'.config('site.whatsapp').'?text='.urlencode('Halo Owner Takoyaki Nusantara, saya ingin tanya outlet terdekat & pemesanan katering.');
                    @endphp
                    <a href="{{ $waOwner }}" target="_blank" rel="noopener"
                       class="w-full inline-flex items-center justify-center gap-2 bg-surface-container-lowest text-primary py-3 px-4 rounded-xl shadow-md hover:bg-surface-container-low transition-all text-[13.5px] font-bold">
                        <span class="material-symbols-outlined text-[18px] text-tertiary">chat</span>
                        Chat WhatsApp Owner Pusat
                    </a>
                    <p class="text-center text-[10.5px] text-white/80">Respon cepat rata-rata < 3 menit (10:00 - 22:00 WIB)</p>
                </div>
            </div>
        </div>
    </div>
</section>