<section class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-16">

    <x-section-header
        label="Perhitungan Finansial Rasional"
        title="Simulasi Keuntungan & Balik Modal (ROI)"
        subtitle="Perhitungan realistis berdasarkan rata-rata performa outlet mitra aktif kami." />

    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6 items-center">

        {{-- Table --}}
        <div class="lg:col-span-7 bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col gap-4">
            <div class="flex items-center justify-between pb-3 border-b border-surface-container-high flex-wrap gap-2">
                <span class="text-[15px] font-bold text-on-surface">Asumsi Penjualan Moderat (50 Porsi / Hari)</span>
                <span class="px-3 py-1 rounded-full bg-tertiary/15 text-tertiary text-[10.5px] font-bold">Rasio Realistis</span>
            </div>

            <div class="flex flex-col gap-3 text-[13.5px]">
                <div class="flex justify-between items-center">
                    <span class="text-on-surface-variant">Harga Jual Rata-rata per Box</span>
                    <span class="font-bold">Rp 20.000 / porsi</span>
                </div>
                <div class="flex justify-between items-center">
                    <span class="text-on-surface-variant">Omset Harian (50 × Rp 20.000)</span>
                    <span class="font-bold">Rp 1.000.000 / hari</span>
                </div>
                <div class="flex justify-between items-center bg-surface-container-low px-3 py-2 rounded-lg">
                    <span class="font-bold">Omset Bulanan (30 hari)</span>
                    <span class="font-bold text-primary text-[18px]">Rp 30.000.000</span>
                </div>

                <div class="h-px bg-outline-variant/30 my-1"></div>

                <div class="flex justify-between items-center">
                    <span class="text-on-surface-variant">HPP Bahan Baku & Packaging (~45%)</span>
                    <span class="text-error font-semibold">- Rp 13.500.000</span>
                </div>
                <div class="flex justify-between items-center font-bold">
                    <span>Estimasi Laba Kotor (Gross 55%)</span>
                    <span>Rp 16.500.000</span>
                </div>

                <div class="h-px bg-outline-variant/30 my-1"></div>

                <div class="text-[11px] font-bold text-on-surface-variant uppercase tracking-wider">Estimasi Pengeluaran Operasional:</div>
                <div class="flex justify-between text-[12.5px] text-on-surface-variant pl-3"><span>• Sewa Lokasi / Teras Minimarket</span><span>Rp 2.500.000</span></div>
                <div class="flex justify-between text-[12.5px] text-on-surface-variant pl-3"><span>• Gaji 1 Karyawan</span><span>Rp 2.500.000</span></div>
                <div class="flex justify-between text-[12.5px] text-on-surface-variant pl-3"><span>• Gas, Listrik & Kebersihan</span><span>Rp 500.000</span></div>

                <div class="flex justify-between items-center py-3 px-4 bg-primary/10 rounded-xl mt-2">
                    <span class="text-[15px] font-bold text-primary">Laba Bersih Mitra / Bulan</span>
                    <span class="text-[22px] font-bold text-primary">Rp 11.000.000</span>
                </div>

                <div class="p-3 bg-tertiary/15 rounded-lg flex items-center gap-3">
                    <span class="material-symbols-outlined text-tertiary text-[22px]">speed</span>
                    <p class="text-[12px] text-on-surface">
                        <strong>Titik Impas (BEP) Cepat:</strong> Paket Portable (~Rp 14.5 Jt) balik modal ~<strong>1.3 bulan</strong>! Paket Semi-Container (~Rp 22.5 Jt) balik modal ~<strong>2 bulan</strong>!
                    </p>
                </div>
            </div>
        </div>

        {{-- Simulator --}}
        <div class="lg:col-span-5 bg-surface-container-high/60 p-6 rounded-2xl shadow-sm flex flex-col gap-5">
            <div>
                <span class="text-[11px] text-primary uppercase font-bold tracking-wider">Simulator Interaktif</span>
                <h3 class="text-[20px] font-bold text-on-surface mt-1">Cek Potensi Penghasilanmu</h3>
                <p class="text-[12.5px] text-on-surface-variant">Geser slider porsi per hari untuk memperkirakan keuntungan bulanan:</p>
            </div>

            <div class="flex flex-col gap-3">
                <div class="flex justify-between items-center">
                    <span class="text-[13px] font-semibold text-on-surface">Target Penjualan Harian:</span>
                    <span class="text-[15px] font-bold text-primary" id="slider-label">50 Porsi</span>
                </div>
                <input id="roi-slider" class="w-full accent-primary cursor-pointer h-2 bg-surface-container-highest rounded-lg" max="120" min="30" step="10" type="range" value="50">
                <div class="flex justify-between text-[10px] text-on-surface-variant">
                    <span>30 Porsi</span><span>50</span><span>80</span><span>120 Porsi</span>
                </div>
            </div>

            <div class="grid grid-cols-2 gap-3">
                <div class="p-3 rounded-xl bg-surface-container-lowest flex flex-col shadow-sm">
                    <span class="text-[10.5px] text-on-surface-variant">Omset / Bulan</span>
                    <span class="text-[15px] font-bold text-on-surface" id="calc-omset">Rp 30.000.000</span>
                </div>
                <div class="p-3 rounded-xl bg-surface-container-lowest flex flex-col shadow-sm">
                    <span class="text-[10.5px] text-on-surface-variant">Biaya HPP (45%)</span>
                    <span class="text-[15px] font-bold text-error" id="calc-hpp">Rp 13.500.000</span>
                </div>
                <div class="col-span-2 p-4 rounded-xl bg-surface-container-lowest flex flex-col shadow-sm">
                    <span class="text-[10.5px] text-on-surface-variant">Estimasi Laba Bersih (Setelah Ops Rp 5.5 Jt)</span>
                    <span class="text-[22px] font-bold text-tertiary" id="calc-net">Rp 11.000.000</span>
                    <span class="text-[11px] text-on-surface-variant mt-1" id="calc-bep">Estimasi Balik Modal Paket Semi-Container: ~2.0 Bulan</span>
                </div>
            </div>

            <a href="#form-daftar" class="w-full text-center py-3 bg-primary hover:bg-primary-container text-on-primary text-[13.5px] font-bold rounded-lg transition-all shadow-md">
                Konsultasikan Rencana Lokasimu
            </a>
        </div>
    </div>
</section>