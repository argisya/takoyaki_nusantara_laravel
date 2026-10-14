<section class="w-full bg-surface-container-low py-16">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <div class="flex flex-col lg:flex-row items-start lg:items-end justify-between mb-8 gap-3">
            <div>
                <span class="text-[11px] text-primary uppercase font-bold tracking-wider">Transparansi Tanpa Biaya Tersembunyi</span>
                <h2 class="text-[24px] md:text-[32px] font-bold text-on-surface mt-1">Semua Fasilitas Lengkap Langsung Dikirim</h2>
            </div>
            <p class="text-[13px] text-on-surface-variant max-w-md">
                Anda hanya perlu menyediakan lokasi & karyawan, semua alat dan bahan siap dipasang oleh tim kami.
            </p>
        </div>

        @php
            $facilities = [
                ['icon'=>'soup_kitchen', 'title'=>'Peralatan Masak Komplit', 'color'=>'primary', 'items'=>['2x Wajan Takoyaki Cor Tebal (56 Lubang)','Kompor Gas Khusus Tekanan Standar','4x Jarum Pembalik Stainless','Oil Dropper & Dispenser','Squeeze Sauce Bottles (5 pcs)','Timer Digital & Termometer']],
                ['icon'=>'palette',      'title'=>'Display & Promosi Booth',  'color'=>'secondary', 'items'=>['Neon Sign Akrilik Takoyaki Nusantara','2x Lampion Tradisional Jepang','Roll-up Banner Menu','2 Set Seragam Celemek & Ikat Kepala','Acrylic Stand Table QRIS Resmi','Brosur Grand Opening (200 lbr)']],
                ['icon'=>'inventory_2',  'title'=>'Starter Pack 500 Porsi',   'color'=>'tertiary',  'items'=>['25 kg Premix Tepung Rahasia','10 kg Potongan Tentakel Gurita','10 Liter Saus Tare Authentic','3 kg Katsuobushi Grade A','Mayones Jepang & Serpihan Nori','500 Box Kemasan Food-Grade']],
                ['icon'=>'verified_user','title'=>'Sistem & Pendampingan',    'color'=>'primary',   'items'=>['Hak Lisensi Merk Dagang','Akses POS Kasir Online 1 Tahun','Video Tutorial & Buku SOP','Merchant GrabFood & GoFood','Grup WA Konsultan Pusat','Jaminan Cold-Chain Bahan Baku']],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
            @foreach($facilities as $f)
                <div class="bg-surface-container-lowest p-5 rounded-xl shadow-sm flex flex-col gap-3">
                    <div class="flex items-center gap-2 text-{{ $f['color'] }}">
                        <span class="material-symbols-outlined text-[24px]">{{ $f['icon'] }}</span>
                        <h4 class="text-[14.5px] font-bold text-on-surface">{{ $f['title'] }}</h4>
                    </div>
                    <ul class="flex flex-col gap-2 text-[12.5px] text-on-surface-variant">
                        @foreach($f['items'] as $item)
                            <li class="flex items-center gap-1.5">
                                <span class="w-1.5 h-1.5 rounded-full bg-{{ $f['color'] }} shrink-0"></span>
                                <span>{{ $item }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach
        </div>
    </div>
</section>