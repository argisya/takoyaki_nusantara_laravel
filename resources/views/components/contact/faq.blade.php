<section class="w-full py-16 bg-surface-container-low/50">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        <x-section-header
            label="Frequently Asked Questions"
            title="Pertanyaan Seputar Layanan & Kontak"
            subtitle="Jawaban ringkas atas pertanyaan yang sering diajukan pelanggan, calon mitra, dan penyelenggara event." />

        @php
            $faqs = [
                ['icon'=>'timer',         'color'=>'primary',   'q'=>'Berapa lama estimasi respon chat WhatsApp?',                          'a'=>'Pada jam operasional (08.00-21.00 WIB), pesan ditangani rata-rata di bawah 15 menit. Di luar jam tersebut, pesan tetap tercatat dan diprioritaskan pertama kali keesokan paginya.', 'tag'=>'Siaga 7 Hari Seminggu',   'tagColor'=>'text-tertiary'],
                ['icon'=>'corporate_fare','color'=>'secondary', 'q'=>'Bisakah datang langsung ke Head Office untuk tester menu & diskusi franchise?','a'=>'Tentu! Kami menyambut calon mitra. Untuk memastikan tim Business Development dan tester takoyaki hangat siap, mohon reservasi jadwal H-1 via WhatsApp Kemitraan terlebih dahulu.',   'tag'=>'Janji Temu H-1',          'tagColor'=>'text-primary'],
                ['icon'=>'soup_kitchen',  'color'=>'tertiary',  'q'=>'Bagaimana prosedur booking booth live cooking untuk event?',           'a'=>'Hubungi CS Event via WhatsApp, informasikan tanggal acara, lokasi venue, serta estimasi porsi (minimal 100 porsi). Tim katering akan mengirimkan proposal paket, juru masak terlatih, dan perlengkapan booth lengkap ke lokasi.', 'tag'=>'Paket Mulai 100 Porsi', 'tagColor'=>'text-secondary'],
            ];
        @endphp

        <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
            @foreach($faqs as $f)
                <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col justify-between">
                    <div>
                        <div class="w-10 h-10 rounded-xl bg-{{ $f['color'] }}/10 text-{{ $f['color'] }} flex items-center justify-center mb-4">
                            <span class="material-symbols-outlined text-[22px]">{{ $f['icon'] }}</span>
                        </div>
                        <h3 class="text-[15px] font-bold text-on-surface leading-snug">{{ $f['q'] }}</h3>
                        <p class="text-[12.5px] text-on-surface-variant mt-2 leading-relaxed">{{ $f['a'] }}</p>
                    </div>
                    <span class="text-[11px] {{ $f['tagColor'] }} font-bold flex items-center gap-1 mt-4">
                        <span class="material-symbols-outlined text-[15px]">check</span>
                        {{ $f['tag'] }}
                    </span>
                </div>
            @endforeach
        </div>
    </div>
</section>