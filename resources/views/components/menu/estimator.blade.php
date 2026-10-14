<section class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-6">
    <div class="bg-surface-container-lowest rounded-3xl p-6 md:p-10 shadow-lg">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            {{-- Controls --}}
            <div class="lg:col-span-7 flex flex-col gap-6">
                <div>
                    <span class="inline-flex items-center gap-2 bg-primary/10 text-primary px-3 py-1 rounded-full mb-2">
                        <span class="material-symbols-outlined text-[15px]">tune</span>
                        <span class="text-[10px] font-bold uppercase tracking-wider">Kalkulator Pesanan Instan</span>
                    </span>
                    <h3 class="text-[22px] font-bold text-on-surface">Rakit & Estimasi Pesananmu</h3>
                    <p class="text-[13px] text-on-surface-variant">Pilih paket takoyaki dan tambahkan saus favorit untuk simulasi pesanan.</p>
                </div>

                {{-- Step 1 --}}
                <div class="flex flex-col gap-3">
                    <label class="text-[14px] font-semibold flex items-center gap-2">
                        <span class="w-6 h-6 rounded-full bg-primary text-on-primary text-[11px] font-bold flex items-center justify-center">1</span>
                        Pilih Ukuran Paket
                    </label>
                    <div class="grid grid-cols-2 sm:grid-cols-4 gap-2" id="package-selector-group">
                        <button type="button" class="pkg-btn p-3 rounded-xl text-left transition-all bg-surface-container-low text-on-surface" data-pkg="cicip"   onclick="setPackage('cicip', 15000, 'Paket Cicip Solo (4 Butir)')">
                            <span class="text-[13px] block font-bold">4 Butir</span>
                            <span class="text-[11px] text-on-surface-variant block">Rp 15.000</span>
                        </button>
                        <button type="button" class="pkg-btn p-3 rounded-xl text-left transition-all bg-primary-container text-on-primary-container shadow-md" data-pkg="reguler" onclick="setPackage('reguler', 20000, 'Paket Personal Reguler (6 Butir)')">
                            <span class="text-[13px] block font-bold">6 Butir</span>
                            <span class="text-[11px] block">Rp 20.000</span>
                        </button>
                        <button type="button" class="pkg-btn p-3 rounded-xl text-left transition-all bg-surface-container-low text-on-surface" data-pkg="sharing" onclick="setPackage('sharing', 35000, 'Paket Sharing Berdua (10 Butir)')">
                            <span class="text-[13px] block font-bold">10 Butir</span>
                            <span class="text-[11px] text-on-surface-variant block">Rp 35.000</span>
                        </button>
                        <button type="button" class="pkg-btn p-3 rounded-xl text-left transition-all bg-surface-container-low text-on-surface" data-pkg="party"   onclick="setPackage('party', 55000, 'Paket Keluarga Pesta (16 Butir Box)')">
                            <span class="text-[13px] block font-bold">16 Butir Box</span>
                            <span class="text-[11px] text-on-surface-variant block">Rp 55.000</span>
                        </button>
                    </div>
                </div>

                {{-- Step 2 --}}
                <div class="flex flex-col gap-3">
                    <label class="text-[14px] font-semibold flex items-center gap-2">
                        <span class="w-6 h-6 rounded-full bg-primary text-on-primary text-[11px] font-bold flex items-center justify-center">2</span>
                        Tambah Saus & Topping Spesial
                    </label>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                        @php
                            $addons = [
                                ['label'=>'Sambal Matah Bali',        'price'=>3000],
                                ['label'=>'Torched Mentai Tobiko',    'price'=>4000],
                                ['label'=>'Mozzarella Cheese Melt',   'price'=>5000],
                                ['label'=>'Extra Katsuobushi Bonito', 'price'=>2000],
                            ];
                        @endphp
                        @foreach($addons as $a)
                            <label class="flex items-center justify-between p-3 rounded-xl bg-surface-container-low cursor-pointer hover:bg-surface-container transition-colors">
                                <div class="flex items-center gap-2">
                                    <input type="checkbox" class="w-4 h-4 accent-primary rounded"
                                           onchange="toggleAddon(this, {{ $a['price'] }}, '{{ $a['label'] }}')">
                                    <span class="text-[13px] text-on-surface">{{ $a['label'] }}</span>
                                </div>
                                <span class="text-[11px] text-primary font-bold">+Rp {{ number_format($a['price'], 0, ',', '.') }}</span>
                            </label>
                        @endforeach
                    </div>
                </div>

                {{-- Step 3 --}}
                <div class="flex items-center justify-between p-3 bg-surface-container-low rounded-2xl">
                    <div class="flex flex-col">
                        <span class="text-[13px] text-on-surface font-bold">Jumlah Porsi</span>
                        <span class="text-[11px] text-on-surface-variant">Klik porsi yang ingin dinikmati</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <button type="button" onclick="changeQty(-1)" class="w-9 h-9 rounded-full bg-surface-container-lowest hover:bg-surface-container font-bold text-lg flex items-center justify-center transition-colors">-</button>
                        <span class="text-[16px] font-bold w-8 text-center" id="order-qty">1</span>
                        <button type="button" onclick="changeQty(1)" class="w-9 h-9 rounded-full bg-primary hover:bg-primary-container text-on-primary font-bold text-lg flex items-center justify-center transition-colors">+</button>
                    </div>
                </div>
            </div>

            {{-- Summary --}}
            <div class="lg:col-span-5 bg-surface-container-low p-6 rounded-2xl flex flex-col justify-between gap-4">
                <div class="flex flex-col gap-3">
                    <div class="flex items-center justify-between pb-2 border-b border-outline-variant/50">
                        <h4 class="text-[15px] font-bold">Ringkasan Estimasi</h4>
                        <span class="material-symbols-outlined text-primary text-[20px]">receipt_long</span>
                    </div>

                    <div class="flex flex-col gap-2 text-[12.5px] text-on-surface-variant">
                        <div class="flex justify-between text-on-surface">
                            <span class="font-bold" id="summary-pkg-name">Paket Personal Reguler (6 Butir)</span>
                            <span class="font-bold" id="summary-pkg-price">Rp 20.000</span>
                        </div>
                        <div class="flex justify-between">
                            <span>Free Saus Tare & Katsuobushi</span>
                            <span class="text-tertiary font-bold">Termasuk</span>
                        </div>
                        <div class="flex flex-col gap-1 pt-1" id="summary-addons">
                            <span class="text-on-surface-variant italic">Belum ada topping tambahan</span>
                        </div>
                    </div>

                    <div class="mt-2 bg-surface-container-high/60 p-3 rounded-xl">
                        <div class="flex justify-between items-baseline">
                            <span class="text-[13px] text-on-surface font-semibold">Total Perkiraan</span>
                            <span class="text-[24px] text-primary font-bold" id="summary-total">Rp 20.000</span>
                        </div>
                        <span class="text-[11px] text-on-surface-variant mt-1 block">Estimasi takeaway / outlet. Promo diskon ojek online berlaku di aplikasi.</span>
                    </div>
                </div>

                <div class="flex flex-col gap-2 pt-2">
                    <span class="text-[10px] text-on-surface uppercase font-bold tracking-wider">Pesan Cepat Lewat:</span>
                    @php
                        $wa = 'https://wa.me/'.config('site.whatsapp').'?text='.urlencode(config('site.whatsapp_text'));
                    @endphp
                    <a href="https://gofood.co.id" target="_blank" rel="noopener" class="bg-surface-container-lowest hover:bg-tertiary/10 p-2.5 rounded-xl flex items-center justify-between shadow-sm transition-all group">
                        <div class="flex items-center gap-2">
                            <div class="w-7 h-7 rounded-full bg-tertiary flex items-center justify-center text-on-tertiary">
                                <span class="material-symbols-outlined text-[15px]">moped</span>
                            </div>
                            <span class="text-[13px] font-bold">GoFood</span>
                        </div>
                        <span class="text-[11px] text-tertiary group-hover:translate-x-1 transition-transform">Buka →</span>
                    </a>
                    <a href="https://shopee.co.id/now-food" target="_blank" rel="noopener" class="bg-surface-container-lowest hover:bg-primary/10 p-2.5 rounded-xl flex items-center justify-between shadow-sm transition-all group">
                        <div class="flex items-center gap-2">
                            <div class="w-7 h-7 rounded-full bg-primary flex items-center justify-center text-on-primary">
                                <span class="material-symbols-outlined text-[15px]">shopping_bag</span>
                            </div>
                            <span class="text-[13px] font-bold">ShopeeFood</span>
                        </div>
                        <span class="text-[11px] text-primary group-hover:translate-x-1 transition-transform">Diskon 30% →</span>
                    </a>
                    <a href="{{ $wa }}" target="_blank" rel="noopener" class="bg-surface-container-lowest hover:bg-secondary/15 p-2.5 rounded-xl flex items-center justify-between shadow-sm transition-all group">
                        <div class="flex items-center gap-2">
                            <div class="w-7 h-7 rounded-full bg-secondary flex items-center justify-center text-on-secondary">
                                <span class="material-symbols-outlined text-[15px]">chat</span>
                            </div>
                            <span class="text-[13px] font-bold">WhatsApp Order</span>
                        </div>
                        <span class="text-[11px] text-secondary group-hover:translate-x-1 transition-transform">Chat CS →</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>