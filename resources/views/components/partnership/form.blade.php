<section class="w-full bg-surface-container-low py-16" id="form-daftar">
    <div class="w-full max-w-[1000px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="bg-surface-container-lowest rounded-3xl p-6 lg:p-10 shadow-xl flex flex-col gap-6">

            <div class="text-center max-w-xl mx-auto flex flex-col gap-2">
                <span class="text-[11px] text-primary uppercase font-bold tracking-wider">Mulai Sekarang</span>
                <h2 class="text-[24px] md:text-[32px] font-bold text-on-surface">Formulir Pendaftaran & Konsultasi Lokasi</h2>
                <p class="text-[13.5px] text-on-surface-variant">Isi form di bawah ini. Konsultan franchise kami akan menghubungi via WhatsApp dalam 1×24 jam.</p>
            </div>

            @if ($errors->any())
                <div class="bg-error/10 border border-error/30 text-error p-4 rounded-xl text-[13px]">
                    <ul class="list-disc list-inside">
                        @foreach ($errors->all() as $err)
                            <li>{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('partnership.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-5">
                @csrf

                <div class="flex flex-col gap-1.5">
                    <label for="name" class="text-[12px] font-semibold text-on-surface">Nama Lengkap Pemohon *</label>
                    <input id="name" name="name" required type="text" value="{{ old('name') }}"
                           placeholder="Contoh: Budi Santoso"
                           class="w-full p-3 rounded-lg bg-surface ring-1 ring-outline-variant/50 focus:ring-2 focus:ring-primary outline-none text-[13.5px]">
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="phone" class="text-[12px] font-semibold text-on-surface">Nomor WhatsApp Aktif *</label>
                    <input id="phone" name="phone" required type="tel" value="{{ old('phone') }}"
                           placeholder="Contoh: 081234567890"
                           class="w-full p-3 rounded-lg bg-surface ring-1 ring-outline-variant/50 focus:ring-2 focus:ring-primary outline-none text-[13.5px]">
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="city" class="text-[12px] font-semibold text-on-surface">Kota / Kabupaten Rencana Buka *</label>
                    <input id="city" name="city" required type="text" value="{{ old('city') }}"
                           placeholder="Contoh: Surabaya Timur, Jawa Timur"
                           class="w-full p-3 rounded-lg bg-surface ring-1 ring-outline-variant/50 focus:ring-2 focus:ring-primary outline-none text-[13.5px]">
                </div>

                <div class="flex flex-col gap-1.5">
                    <label for="package" class="text-[12px] font-semibold text-on-surface">Pilihan Paket Kemitraan *</label>
                    <select id="package" name="package" required
                            class="w-full p-3 rounded-lg bg-surface ring-1 ring-outline-variant/50 focus:ring-2 focus:ring-primary outline-none text-[13.5px]">
                        <option value="Paket Semi-Container (Rp 22.500.000) - Best Seller">Paket Semi-Container (Rp 22.500.000) – Best Seller</option>
                        <option value="Paket Booth Portable / Tenda (Rp 14.500.000)">Paket Booth Portable / Tenda (Rp 14.500.000)</option>
                        <option value="Paket Mall & Island Outlet (Rp 38.000.000)">Paket Mall & Island Outlet (Rp 38.000.000)</option>
                    </select>
                </div>

                <div class="md:col-span-2 flex flex-col gap-1.5">
                    <label for="location" class="text-[12px] font-semibold text-on-surface">Rencana Titik Lokasi atau Pengalaman Usaha Sebelumnya</label>
                    <textarea id="location" name="location" rows="3"
                              placeholder="Contoh: Sudah ada calon titik di depan Alfamart Jl. Pemuda / Belum ada lokasi"
                              class="w-full p-3 rounded-lg bg-surface ring-1 ring-outline-variant/50 focus:ring-2 focus:ring-primary outline-none text-[13.5px] resize-none">{{ old('location') }}</textarea>
                </div>

                <div class="md:col-span-2 pt-2">
                    <button type="submit"
                            class="w-full py-3.5 rounded-xl bg-primary hover:bg-primary-container text-on-primary text-[14px] font-bold shadow-md hover:shadow-lg transition-all flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-[20px]">send</span>
                        <span>Kirim Permohonan ke Konsultan WhatsApp</span>
                    </button>
                    <p class="text-[11.5px] text-on-surface-variant text-center mt-2 flex items-center justify-center gap-1">
                        <span class="material-symbols-outlined text-[15px] text-tertiary">lock</span>
                        Data pribadi Anda aman dan hanya digunakan untuk konsultasi kemitraan resmi.
                    </p>
                </div>
            </form>
        </div>
    </div>
</section>