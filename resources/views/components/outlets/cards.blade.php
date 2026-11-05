<section class="w-full py-6">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="flex items-center justify-between mb-6 gap-3 flex-wrap">
            <div>
                <h2 class="text-[22px] font-bold text-on-surface">Katalog Booth & Lokasi Terdaftar</h2>
                <p class="text-[12.5px] text-on-surface-variant">Pilih booth untuk melihat fasilitas, navigasi Maps, atau chat langsung via WhatsApp Outlet.</p>
            </div>
            <span id="outlet-count-badge" class="text-[12px] bg-surface-container text-on-surface-variant px-4 py-2 rounded-full font-semibold">
                Menampilkan {{ $outlets->count() }} Cabang Aktif
            </span>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6" id="outlet-card-container">
            @foreach ($outlets as $o)
                @php
                    $cityLabel = ucfirst($o->city);
                    $isOpen = (bool) $o->is_open;
                    $phone = $o->phone ?? config('site.whatsapp');
                    $waMsg = urlencode("Halo Admin {$o->name} Takoyaki Nusantara, saya ingin memesan takoyaki hangat.");
                    $mapsUrl = $o->maps_url ?? 'https://maps.google.com/?q=' . urlencode($o->name . ' ' . $o->address);
                    $imageUrl = $o->image_url ?? 'https://lh3.googleusercontent.com/aida-public/AB6AXuB7jdrY-aKb2eQjAWxSuXPJHRt05sCaCZXwiHW_9R7mrwAuwUH_zPp8uq4Vr3HmsWZ9JYPaYEXWIMtY5AYo4PudBUChegfQbAPlCMEuKN2x-_ud3RY0S0Rfe-aaGVhRiIHnFmeQ0BSdA4pKkGoW53giPz2o_D1Gz7Q2-5iqpw1YfcbkeK0apedPIqp9zCAcRUe98QHn_w8LdS_LLPwyCIcHUJK2DRW0TWB7IALtTBMGGX8m4uLhWP86';
                    $facilities = is_array($o->facilities) ? $o->facilities : ['Dine-in Mini Bar', 'Takeaway Cepat', 'Parkir Motor', 'QRIS Siap'];
                @endphp

                <article class="outlet-card bg-surface-container-lowest rounded-2xl shadow-sm hover:shadow-md transition-all p-4 flex flex-col justify-between"
                         data-city="{{ strtolower($o->city) }}"
                         data-open="{{ $isOpen ? 'true' : 'false' }}">
                    <div>
                        <div class="relative w-full h-44 rounded-xl overflow-hidden mb-4 bg-surface-variant">
                            <img src="{{ $imageUrl }}" alt="{{ $o->name }}" loading="lazy"
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">

                            <div class="absolute top-3 left-3 flex flex-wrap gap-1">
                                <span class="bg-primary text-on-primary text-[10px] px-2.5 py-1 rounded-md shadow-sm font-bold uppercase tracking-wider">
                                    {{ $o->badge ?? 'Cabang Resmi' }}
                                </span>
                                @if ($isOpen)
                                    <span class="bg-tertiary text-on-tertiary text-[10px] px-2.5 py-1 rounded-md shadow-sm font-semibold flex items-center gap-1">
                                        <span class="w-1.5 h-1.5 rounded-full bg-white animate-ping"></span> Buka
                                    </span>
                                @else
                                    <span class="bg-surface-container-highest text-on-surface-variant text-[10px] px-2.5 py-1 rounded-md shadow-sm font-semibold flex items-center gap-1">
                                        <span class="material-symbols-outlined text-[13px]">pending</span> Tutup
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="flex items-start justify-between gap-2">
                            <div>
                                <span class="text-[10.5px] text-primary font-bold uppercase">{{ $cityLabel }}</span>
                                <h3 class="text-[16px] font-bold text-on-surface mt-0.5">{{ $o->name }}</h3>
                            </div>
                            <span class="material-symbols-outlined text-primary text-[22px]">verified</span>
                        </div>

                        <p class="text-[12.5px] text-on-surface-variant mt-2 line-clamp-2 leading-relaxed">{{ $o->address }}</p>

                        <div class="mt-3 flex flex-wrap gap-1">
                            @foreach ($facilities as $facility)
                                <span class="px-2 py-0.5 bg-surface-variant text-[10.5px] rounded text-on-surface-variant">{{ $facility }}</span>
                            @endforeach
                        </div>
                    </div>

                    <div class="mt-4 pt-3 border-t border-outline-variant/30 flex flex-col gap-2">
                        <a href="https://wa.me/{{ preg_replace('/\D+/', '', $phone) }}?text={{ $waMsg }}" target="_blank" rel="noopener"
                           class="w-full inline-flex items-center justify-center gap-2 bg-primary text-on-primary hover:bg-primary-container py-2.5 rounded-xl text-[12.5px] font-bold shadow-sm transition-all">
                            <span class="material-symbols-outlined text-[16px]">chat</span>
                            Pesan via WhatsApp
                        </a>
                        <div class="grid grid-cols-2 gap-2">
                            <a href="{{ $mapsUrl }}" target="_blank" rel="noopener"
                               class="inline-flex items-center justify-center gap-1 bg-surface-container hover:bg-surface-container-high text-on-surface text-[11.5px] py-2 rounded-lg transition-all font-semibold">
                                <span class="material-symbols-outlined text-[15px] text-primary">directions</span>
                                Petunjuk Maps
                            </a>
                            <a href="https://gofood.co.id" target="_blank" rel="noopener"
                               class="inline-flex items-center justify-center gap-1 bg-surface-container hover:bg-surface-container-high text-on-surface text-[11.5px] py-2 rounded-lg transition-all font-semibold">
                                <span class="material-symbols-outlined text-[15px] text-secondary">moped</span>
                                GoFood / Shopee
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>

        <div id="no-results-state" class="hidden flex-col items-center justify-center py-16 text-center bg-surface-container-lowest rounded-2xl p-8 mt-6">
            <span class="material-symbols-outlined text-[54px] text-primary/40">wrong_location</span>
            <h3 class="text-[17px] font-bold text-on-surface mt-2">Outlet Tidak Ditemukan</h3>
            <p class="text-[13px] text-on-surface-variant max-w-md mt-1">
                Tidak ada cabang yang cocok dengan kata kunci pencarian Anda. Ingin rekomendasi cabang terdekat?
            </p>
            <button id="reset-filters-btn" class="mt-5 px-4 py-2 bg-primary text-on-primary rounded-xl text-[12.5px] font-bold">
                Reset Filter & Pencarian
            </button>
        </div>
    </div>
</section>
