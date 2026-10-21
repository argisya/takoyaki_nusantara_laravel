<section class="w-full py-16 lg:py-20 bg-surface">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-5 items-stretch">

            {{-- Visi --}}
            <div class="lg:col-span-5 bg-inverse-surface text-inverse-on-surface p-6 lg:p-8 rounded-2xl flex flex-col justify-between shadow-lg relative overflow-hidden">
                <div class="relative z-10">
                    <span class="inline-flex items-center gap-2 bg-white/10 px-3 py-1 rounded-full mb-5">
                        <span class="material-symbols-outlined text-secondary-fixed text-[18px]">visibility</span>
                        <span class="text-[11px] text-secondary-fixed uppercase font-bold tracking-widest">Visi Kami</span>
                    </span>
                    <h3 class="text-[22px] lg:text-[26px] font-bold text-inverse-on-surface tracking-tight mb-4 leading-snug">
                        Membangun Bisnis Kemitraan yang Berkelanjutan & Saling Menguntungkan
                    </h3>
                    <p class="text-[14.5px] text-inverse-on-surface/90 leading-relaxed">
                        Menggandeng setiap mitra, kami membangun sistem bisnis yang saling menguntungkan dan berkelanjutan, dengan tujuan menghadirkan produk yang relevan dengan keinginan pasar, menjaga kualitas, serta memperluas jangkauan brand ke seluruh Indonesia.
                    </p>
                </div>
                <div class="mt-8 bg-white/5 p-3.5 rounded-xl flex items-center justify-between relative z-10 border border-white/10">
                    <span class="text-[12px] text-secondary-fixed font-semibold">Komitmen Kemitraan</span>
                    <span class="text-[13px] font-bold text-inverse-on-surface">Jangkauan Seluruh Indonesia</span>
                </div>
            </div>

            {{-- Misi --}}
            <div class="lg:col-span-7 bg-surface-container-low p-6 lg:p-8 rounded-2xl flex flex-col shadow-sm">
                <span class="inline-flex items-center gap-2 bg-primary/10 px-3 py-1 rounded-full mb-4 w-fit">
                    <span class="material-symbols-outlined text-primary text-[18px]">flag</span>
                    <span class="text-[11px] text-primary uppercase font-bold tracking-widest">Misi Kami</span>
                </span>
                <h3 class="text-[22px] lg:text-[26px] font-bold text-on-surface tracking-tight mb-6 leading-tight">
                    Empat Komitmen Utama Mewujudkan Pertumbuhan Bersama
                </h3>

                @php
                    $missions = [
                        [
                            'no' => 1,
                            'title' => 'Peluang Wirausaha Terjangkau',
                            'desc' => 'Memberikan kesempatan berwirausaha dengan modal terjangkau dan minim risiko.'
                        ],
                        [
                            'no' => 2,
                            'title' => 'Pelatihan & Pendampingan',
                            'desc' => 'Menyediakan pelatihan, pendampingan, dan dukungan bisnis yang berkesinambungan.'
                        ],
                        [
                            'no' => 3,
                            'title' => 'Inovasi Produk Relevan',
                            'desc' => 'Menghadirkan inovasi produk yang relevan dengan keinginan pasar.'
                        ],
                        [
                            'no' => 4,
                            'title' => 'Kemitraan Berkelanjutan',
                            'desc' => 'Menjalin kemitraan yang saling menguntungkan dan berkelanjutan.'
                        ],
                    ];
                @endphp

                <div class="grid grid-cols-1 sm:grid-cols-2 gap-3.5">
                    @foreach($missions as $m)
                        <div class="bg-surface-container-lowest p-4 rounded-xl shadow-sm flex flex-col justify-between">
                            <div>
                                <div class="w-8 h-8 rounded-lg bg-primary/10 flex items-center justify-center text-primary font-bold text-[13px] mb-2.5">
                                    {{ $m['no'] }}
                                </div>
                                <h4 class="text-[14px] font-bold text-on-surface">{{ $m['title'] }}</h4>
                                <p class="text-[12.5px] text-on-surface-variant mt-1.5 leading-relaxed">{{ $m['desc'] }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>