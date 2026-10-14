<section class="w-full py-16 lg:py-20 bg-surface">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">

            {{-- Visi --}}
            <div class="lg:col-span-5 bg-inverse-surface text-inverse-on-surface p-6 lg:p-8 rounded-2xl flex flex-col justify-between shadow-lg relative overflow-hidden">
                <div class="relative z-10">
                    <span class="inline-flex items-center gap-2 bg-white/10 px-3 py-1 rounded-full mb-5">
                        <span class="material-symbols-outlined text-secondary-fixed text-[18px]">visibility</span>
                        <span class="text-[11px] text-secondary-fixed uppercase font-bold tracking-widest">Visi Masa Depan</span>
                    </span>
                    <h3 class="text-[24px] lg:text-[28px] font-bold text-inverse-on-surface tracking-tight mb-4 leading-tight">
                        Menjadi Icon Street Food Fusion Nomor 1 di Asia Tenggara
                    </h3>
                    <p class="text-[14px] text-inverse-on-surface/80 leading-relaxed">
                        Menjadi jaringan brand kuliner street food fusion terdepan dan terpercaya di Asia Tenggara yang menjunjung tinggi kehalalan, kualitas rasa, dan kebahagiaan pelanggan melalui setiap butiran takoyaki.
                    </p>
                </div>
                <div class="mt-8 bg-white/5 p-3 rounded-xl flex items-center justify-between relative z-10">
                    <span class="text-[12px] text-secondary-fixed">Target Jaringan 2026</span>
                    <span class="text-[14px] font-bold">150+ Cabang</span>
                </div>
            </div>

            {{-- Misi --}}
            <div class="lg:col-span-7 bg-surface-container-low p-6 lg:p-8 rounded-2xl flex flex-col shadow-sm">
                <span class="inline-flex items-center gap-2 bg-primary/10 px-3 py-1 rounded-full mb-4 w-fit">
                    <span class="material-symbols-outlined text-primary text-[18px]">flag</span>
                    <span class="text-[11px] text-primary uppercase font-bold tracking-widest">Misi Kami</span>
                </span>
                <h3 class="text-[22px] lg:text-[26px] font-bold text-on-surface tracking-tight mb-6 leading-tight">
                    Empat Langkah Nyata Mewujudkan Cita Rasa Bermutu
                </h3>

                @php
                    $missions = [
                        ['no'=>1, 'title'=>'Standardisasi & Halal',   'desc'=>'Kuliner street food khas Jepang dengan standar kebersihan tinggi dan jaminan halal 100% tanpa kompromi.'],
                        ['no'=>2, 'title'=>'Inovasi Rempah Lokal',    'desc'=>'Bereksplorasi mengangkat cita rasa bumbu Nusantara ke olahan jajanan modern bertaraf internasional.'],
                        ['no'=>3, 'title'=>'Pemberdayaan UMKM',       'desc'=>'Membuka kemitraan inklusif bagi wirausaha daerah dan menyerap ratusan tenaga kerja lokal.'],
                        ['no'=>4, 'title'=>'Aksesibilitas Digital',   'desc'=>'Memudahkan konsumen menikmati hidangan lewat integrasi aplikasi online terkemuka.'],
                    ];
                @endphp

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3">
                    @foreach($missions as $m)
                        <div class="bg-surface-container-lowest p-4 rounded-xl shadow-sm">
                            <div class="w-8 h-8 rounded-lg bg-surface-container flex items-center justify-center text-primary font-bold mb-2">{{ $m['no'] }}</div>
                            <h4 class="text-[14px] font-bold text-on-surface">{{ $m['title'] }}</h4>
                            <p class="text-[12px] text-on-surface-variant mt-1 leading-relaxed">{{ $m['desc'] }}</p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>