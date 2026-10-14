<section class="w-full py-10">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">

            {{-- Map --}}
            <div class="lg:col-span-8 relative bg-surface-container-lowest rounded-2xl p-4 shadow-md overflow-hidden flex flex-col justify-between min-h-[380px]">
                <div class="flex items-center justify-between gap-3 mb-3 relative z-10">
                    <div class="flex items-center gap-2">
                        <span class="material-symbols-outlined text-primary text-[20px]">explore</span>
                        <h2 class="text-[15px] font-bold text-on-surface">Peta Sebaran Booth Indonesia</h2>
                    </div>
                    <span class="text-[10.5px] bg-primary/10 text-primary px-3 py-1 rounded-full font-bold">GPS Live Tracker</span>
                </div>

                <div class="relative w-full h-[280px] md:h-[320px] rounded-xl overflow-hidden shadow-inner bg-surface-variant bg-cover bg-center"
                     style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDKIXvNoH6DTI3nxiDtu9y0b2i8ekML7MNNSIci_Wyq4uawsVp8EQByZTG3_tXrt0uJjLp51dE8a1i0TM-IKx5Df0iilUDvKu8whGZ-VCfBvZK3OUHqR1MfrtKHa7GrH8z8qGNh7Vui3Z9i-PYT4SbiVLZqFLQjNyMomBWDV0KLoMLjSBTDrHvyFVjMeDO2vZhxUdplzp-mT8ll_3AGop6GuVVuK0cGNu5NNgYtAvJfponSJLvv8knR')">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent flex flex-col justify-end p-4">
                        <div class="flex flex-wrap items-center gap-2">
                            @php
                                $legends = [
                                    ['color'=>'primary',              'text'=>'Jabodetabek Hub: 18 Titik'],
                                    ['color'=>'secondary',            'text'=>'Bandung Raya: 10 Titik'],
                                    ['color'=>'tertiary-container',   'text'=>'Jogja - Jateng: 8 Titik'],
                                    ['color'=>'secondary-container',  'text'=>'Surabaya - Bali: 13 Titik'],
                                ];
                            @endphp
                            @foreach($legends as $l)
                                <span class="px-3 py-1 bg-white/95 backdrop-blur-md rounded-lg text-[10.5px] text-on-surface shadow-sm flex items-center gap-1.5 font-medium">
                                    <span class="w-2 h-2 rounded-full bg-{{ $l['color'] }} inline-block"></span>
                                    {{ $l['text'] }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                </div>

                <div class="mt-3 flex items-center justify-between text-on-surface-variant text-[12px] flex-wrap gap-2">
                    <span class="flex items-center gap-1">
                        <span class="material-symbols-outlined text-[16px] text-tertiary">offline_pin</span>
                        Bahan dipasok harian dari Central Kitchen bersertifikasi Halal
                    </span>
                    <a href="https://maps.google.com" target="_blank" rel="noopener"
                       class="text-primary font-bold hover:underline text-[11.5px]">Buka Google Maps Full →</a>
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