<section class="w-full max-w-[900px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop py-16" id="outlets-faq">
    <x-section-header
        label="Pertanyaan Seputar Outlet"
        title="FAQ Pemesanan & Kunjungan Cabang"
        subtitle="Informasi seputar pemesanan dan kunjungan ke cabang Takoyaki Nusantara." />

    @php
        $faqs = [
            ['q'=>'Apakah semua cabang menyediakan rasa & standar kualitas yang sama?', 'a'=>'Ya, 100% konsisten! Seluruh adonan rahasia rempah nusantara, tare takoyaki jepang, mayones racikan khusus, hingga katsuobushi disuplai terpusat dari Central Kitchen bersertifikasi Halal Indonesia. Semua koki booth menjalani standardisasi memasak wajan cor yang ketat.'],
            ['q'=>'Bisakah pesan takeaway langsung tanpa perlu mengantre lama di booth?', 'a'=>'Tentu! Anda cukup menekan tombol "Pesan via WhatsApp Outlet" di kartu cabang yang dituju, informasikan varian rasa & estimasi waktu kedatangan. Tim booth akan memanggang agar pas matang saat Anda tiba.'],
            ['q'=>'Bagaimana jika ingin memesan untuk acara di kota yang belum ada booth fisik?', 'a'=>'Kami melayani katering luar kota untuk event festival, pernikahan, atau korporasi dengan sistem Pop-Up Mobile Griddle. Silakan chat hotline WhatsApp Owner Pusat untuk menghitung paket mobilitas dan ketersediaan tim.'],
        ];
    @endphp

    <div class="flex flex-col gap-3">
        @foreach($faqs as $faq)
            <div class="faq-item overflow-hidden rounded-xl bg-surface-container-lowest shadow-sm">
                <button type="button"
                        class="faq-trigger flex w-full items-center justify-between gap-3 p-4 text-left text-[14px] font-bold text-on-surface transition-colors hover:text-primary">
                    <span>{{ $faq['q'] }}</span>
                    <span class="material-symbols-outlined shrink-0 transition-transform duration-200">expand_more</span>
                </button>
                <div class="faq-content hidden px-4 pb-4 text-[13px] leading-relaxed text-on-surface-variant">
                    {{ $faq['a'] }}
                </div>
            </div>
        @endforeach
    </div>
</section>