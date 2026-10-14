<section class="w-full py-16">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <div class="text-center max-w-xl mx-auto mb-8">
            <span class="text-[11px] text-primary uppercase font-bold tracking-wider">Pertanyaan Seputar Outlet</span>
            <h2 class="text-[22px] font-bold text-on-surface mt-1">FAQ Pemesanan & Kunjungan Cabang</h2>
        </div>

        @php
            $faqs = [
                ['q'=>'Apakah semua cabang menyediakan rasa & standar kualitas yang sama?', 'a'=>'Ya, 100% konsisten! Seluruh adonan rahasia rempah nusantara, tare takoyaki jepang, mayones racikan khusus, hingga katsuobushi disuplai terpusat dari Central Kitchen bersertifikasi Halal Indonesia. Semua koki booth menjalani standardisasi memasak wajan cor yang ketat.'],
                ['q'=>'Bisakah pesan takeaway langsung tanpa perlu mengantre lama di booth?', 'a'=>'Tentu! Anda cukup menekan tombol "Pesan via WhatsApp Outlet" di kartu cabang yang dituju, informasikan varian rasa & estimasi waktu kedatangan. Tim booth akan memanggang agar pas matang saat Anda tiba.'],
                ['q'=>'Bagaimana jika ingin memesan untuk acara di kota yang belum ada booth fisik?', 'a'=>'Kami melayani katering luar kota untuk event festival, pernikahan, atau korporasi dengan sistem Pop-Up Mobile Griddle. Silakan chat hotline WhatsApp Owner Pusat untuk menghitung paket mobilitas dan ketersediaan tim.'],
            ];
        @endphp

        <div class="max-w-3xl mx-auto flex flex-col gap-3">
            @foreach($faqs as $faq)
                <details class="group bg-surface-container-lowest p-4 rounded-xl shadow-sm transition-all open:bg-surface-container-low">
                    <summary class="flex items-center justify-between cursor-pointer list-none text-[14px] font-bold text-on-surface gap-3">
                        <span>{{ $faq['q'] }}</span>
                        <span class="material-symbols-outlined text-on-surface-variant group-open:rotate-180 transition-transform shrink-0">expand_more</span>
                    </summary>
                    <p class="mt-3 text-[13px] text-on-surface-variant border-t border-outline-variant/30 pt-3 leading-relaxed">
                        {{ $faq['a'] }}
                    </p>
                </details>
            @endforeach
        </div>
    </div>
</section>