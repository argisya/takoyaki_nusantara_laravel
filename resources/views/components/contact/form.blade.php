<section class="w-full py-16">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">

            {{-- Form --}}
            <div class="lg:col-span-6 bg-surface-container-lowest p-6 md:p-8 rounded-2xl shadow-sm">
                <div class="mb-6">
                    <span class="text-[11px] uppercase tracking-wider text-primary font-bold">Respon Cepat 1x24 Jam</span>
                    <h2 class="text-[24px] md:text-[32px] font-bold text-on-surface mt-1">Kirim Pesan atau Pertanyaan</h2>
                    <p class="text-[13px] text-on-surface-variant mt-1">Isi formulir di bawah, tim kami akan menghubungi via WhatsApp atau Email resmi.</p>
                </div>

                @if(session('success'))
                    <div id="formSuccessAlert" class="mb-4 p-3 bg-tertiary/15 text-tertiary rounded-xl text-[12.5px] flex items-center gap-2">
                        <span class="material-symbols-outlined text-[18px]">check_circle</span>
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-4 p-3 bg-error/10 border border-error/30 text-error rounded-xl text-[12.5px]">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $err) <li>{{ $err }}</li> @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.store') }}" method="POST" class="flex flex-col gap-4">
                    @csrf

                    <div class="flex flex-col gap-1.5">
                        <label for="name" class="text-[12px] font-semibold text-on-surface">Nama Lengkap <span class="text-error">*</span></label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">person</span>
                            <input id="name" name="name" required value="{{ old('name') }}" placeholder="Contoh: Budi Santoso"
                                   class="w-full pl-10 pr-3 py-2.5 rounded-xl bg-surface-container-low text-on-surface placeholder:text-on-surface-variant/60 text-[13.5px] focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all">
                        </div>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <div class="flex flex-col gap-1.5">
                            <label for="phone" class="text-[12px] font-semibold text-on-surface">Nomor WhatsApp <span class="text-error">*</span></label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-tertiary text-[18px]">chat</span>
                                <input id="phone" name="phone" required value="{{ old('phone') }}" placeholder="0812xxxxxxxx" type="tel"
                                       class="w-full pl-10 pr-3 py-2.5 rounded-xl bg-surface-container-low text-on-surface placeholder:text-on-surface-variant/60 text-[13.5px] focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all">
                            </div>
                        </div>
                        <div class="flex flex-col gap-1.5">
                            <label for="email" class="text-[12px] font-semibold text-on-surface">Alamat Email <span class="text-error">*</span></label>
                            <div class="relative">
                                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">mail</span>
                                <input id="email" name="email" required value="{{ old('email') }}" placeholder="budi@gmail.com" type="email"
                                       class="w-full pl-10 pr-3 py-2.5 rounded-xl bg-surface-container-low text-on-surface placeholder:text-on-surface-variant/60 text-[13.5px] focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all">
                            </div>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="topic" class="text-[12px] font-semibold text-on-surface">Topik Keperluan <span class="text-error">*</span></label>
                        <div class="relative">
                            <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-primary text-[18px]">category</span>
                            <select id="topic" name="topic" required
                                    class="w-full pl-10 pr-9 py-2.5 rounded-xl bg-surface-container-low text-on-surface text-[13.5px] focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all appearance-none cursor-pointer">
                                <option disabled {{ old('topic') ? '' : 'selected' }} value="">Pilih salah satu topik...</option>
                                <option value="umum"     {{ old('topic') == 'umum'     ? 'selected' : '' }}>Pertanyaan Umum / Info Menu & Varian Rasa</option>
                                <option value="katering" {{ old('topic') == 'katering' ? 'selected' : '' }}>Pemesanan Katering & Event Live Cooking</option>
                                <option value="franchise"{{ old('topic') == 'franchise'? 'selected' : '' }}>Konsultasi Kemitraan Franchise / Cek Lokasi</option>
                                <option value="vendor"   {{ old('topic') == 'vendor'   ? 'selected' : '' }}>Kerjasama Vendor / Supplier Bahan Baku</option>
                                <option value="masukan"  {{ old('topic') == 'masukan'  ? 'selected' : '' }}>Masukan, Ulasan & Saran Pelanggan</option>
                            </select>
                            <span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant pointer-events-none text-[18px]">expand_more</span>
                        </div>
                    </div>

                    <div class="flex flex-col gap-1.5">
                        <label for="message" class="text-[12px] font-semibold text-on-surface">Pesan / Detail Keperluan <span class="text-error">*</span></label>
                        <textarea id="message" name="message" rows="4" required
                                  placeholder="Tuliskan pesan Anda secara rinci (misal: estimasi tamu acara, rencana kota franchise, pertanyaan rasa)..."
                                  class="w-full p-3 rounded-xl bg-surface-container-low text-on-surface placeholder:text-on-surface-variant/60 text-[13.5px] focus:outline-none focus:ring-2 focus:ring-primary/20 transition-all resize-y">{{ old('message') }}</textarea>
                    </div>

                    <div class="flex items-start gap-2 pt-1">
                        <input id="agree" type="checkbox" required
                               class="mt-1 w-4 h-4 rounded text-primary focus:ring-primary accent-primary cursor-pointer">
                        <label for="agree" class="text-[12px] text-on-surface-variant cursor-pointer select-none">
                            Saya setuju data ini digunakan untuk dihubungi oleh representatif Takoyaki Nusantara sesuai kebutuhan layanan.
                        </label>
                    </div>

                    <button type="submit"
                            class="w-full inline-flex items-center justify-center gap-2 bg-primary hover:bg-primary-container text-on-primary py-3.5 rounded-xl text-[14px] font-bold transition-all shadow-md active:scale-[0.99]">
                        <span class="material-symbols-outlined text-[20px]">send</span>
                        <span>Kirim Pesan Sekarang</span>
                    </button>

                    <div class="flex items-center gap-2 pt-1 text-on-surface-variant">
                        <span class="material-symbols-outlined text-[16px] text-tertiary">lock</span>
                        <p class="text-[11.5px]">Data pribadi Anda terlindungi dan tidak akan disebarluaskan.</p>
                    </div>
                </form>
            </div>

            {{-- Office Info + Maps --}}
            <div class="lg:col-span-6 flex flex-col gap-5">

                {{-- Office Info --}}
                <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm flex flex-col gap-5">
                    <div class="flex items-start justify-between gap-3 flex-wrap">
                        <div>
                            <span class="text-[11px] uppercase tracking-wider text-secondary font-bold">Kantor Pusat & Dapur Sentral</span>
                            <h3 class="text-[17px] font-bold text-on-surface mt-0.5">Head Office & Central Kitchen</h3>
                        </div>
                        <div class="bg-surface-container-high px-3 py-1 rounded-xl flex items-center gap-1 shrink-0">
                            <span class="material-symbols-outlined text-secondary text-[16px]">star</span>
                            <span class="text-[11px] font-bold text-on-surface">4.9</span>
                            <span class="text-[10px] text-on-surface-variant">(420+)</span>
                        </div>
                    </div>

                    @php
                        $officeInfo = [
                            ['icon'=>'pin_drop',         'color'=>'primary',   'title'=>'Alamat Lengkap',       'text'=>'Jl. Tebet Raya No. 42B, Tebet Barat, Kec. Tebet, Jakarta Selatan, DKI Jakarta 12810 (seberang SPBU Tebet Raya).'],
                            ['icon'=>'schedule',         'color'=>'secondary', 'title'=>'Jam Operasional Kantor','text'=>'Senin - Sabtu: 08.00 - 18.00 WIB. Minggu & Libur Nasional: Siaga via WhatsApp On-call (09.00 - 17.00 WIB).'],
                            ['icon'=>'directions_subway','color'=>'tertiary',  'title'=>'Akses Transportasi',   'text'=>'350m dari Stasiun KRL Tebet (3 menit jalan kaki). Halte Mikrotrans tepat di depan ruko.'],
                        ];
                    @endphp

                    <div class="flex flex-col gap-4">
                        @foreach($officeInfo as $info)
                            <div class="flex items-start gap-3">
                                <div class="w-8 h-8 rounded-lg bg-{{ $info['color'] }}/10 text-{{ $info['color'] }} flex items-center justify-center shrink-0 mt-0.5">
                                    <span class="material-symbols-outlined text-[18px]">{{ $info['icon'] }}</span>
                                </div>
                                <div>
                                    <p class="text-[12.5px] text-on-surface font-semibold">{{ $info['title'] }}</p>
                                    <p class="text-[12px] text-on-surface-variant leading-relaxed">{{ $info['text'] }}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>

                    <div class="p-3 bg-surface-container rounded-xl flex items-center justify-between gap-3 flex-wrap">
                        <div class="flex items-center gap-2">
                            <span class="material-symbols-outlined text-primary text-[20px]">hub</span>
                            <div>
                                <p class="text-[11px] text-on-surface font-bold">Titik Hub Distribusi:</p>
                                <p class="text-[11px] text-on-surface-variant">Hub DIY-Yogyakarta & Central Kitchen Sidoarjo</p>
                            </div>
                        </div>
                        <span class="text-[10.5px] text-tertiary font-bold bg-tertiary/10 px-2 py-0.5 rounded-full">Tersedia</span>
                    </div>
                </div>

                {{-- Map --}}
                <div class="bg-surface-container-lowest p-2 rounded-2xl shadow-sm flex flex-col gap-3">
                    <div class="relative w-full h-[320px] rounded-xl overflow-hidden group bg-surface-variant bg-cover bg-center"
                         style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuBJbl-xdNqwgBbW6puAIGp1fzPFQjItuaLIE05NhOqCqQQbUCTtMW0LCyAdn3KG3W-DpATp9zxcZEv0qZJT26H-12rcOEXI3Tst7csK1gAv0fdqhdRmx9SyW7RuzueFkIBwilFvdax3ur5VrFAST1YSOSXC14h7ZpNY3xH_XDM2vJyyfpm0pZ7Hkl6XvmL_xsVm8L3I48eAfXl_On0wyui47kk-gdzj1Iw8AeKzvOfD377W5Og27nh-')">
                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent pointer-events-none"></div>

                        <div class="absolute top-3 left-3 bg-white/95 backdrop-blur-md px-3 py-1.5 rounded-xl shadow-md flex items-center gap-2">
                            <span class="w-3 h-3 rounded-full bg-primary animate-ping"></span>
                            <span class="text-[11px] font-bold text-on-surface">Takoyaki Nusantara Head Office</span>
                        </div>

                        <div class="absolute bottom-3 left-3 right-3 flex items-center justify-between gap-2 flex-wrap">
                            <div class="bg-white/90 backdrop-blur-md px-3 py-1.5 rounded-xl text-[11px] font-semibold hidden sm:flex items-center gap-1.5 shadow-sm">
                                <span class="material-symbols-outlined text-primary text-[16px]">location_on</span>
                                Tebet Barat, Jakarta Selatan
                            </div>
                            <div class="flex items-center gap-2 ml-auto">
                                <a href="https://maps.google.com/?q=Tebet+Raya+Jakarta+Selatan" target="_blank" rel="noopener"
                                   class="inline-flex items-center gap-1.5 bg-primary text-on-primary hover:bg-primary-container px-3.5 py-2 rounded-xl text-[11px] font-bold shadow-md transition-all">
                                    <span class="material-symbols-outlined text-[15px]">navigation</span>
                                    Petunjuk Rute
                                </a>
                                <a href="https://maps.google.com/?q=Tebet+Raya+Jakarta+Selatan" target="_blank" rel="noopener"
                                   class="inline-flex items-center gap-1.5 bg-white/95 text-on-surface hover:bg-surface-container-high px-3 py-2 rounded-xl text-[11px] font-bold shadow-md transition-all">
                                    <span class="material-symbols-outlined text-[15px]">open_in_new</span>
                                    Maps
                                </a>
                            </div>
                        </div>
                    </div>

                    <p class="text-[11px] text-on-surface-variant px-2 flex items-center justify-between">
                        <span>*Tersedia area parkir untuk tamu janji temu kemitraan.</span>
                        <span class="text-primary font-semibold">Bebas Biaya Parkir Tamu</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>