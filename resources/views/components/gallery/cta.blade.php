<section class="w-full py-14 bg-surface">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="relative bg-gradient-to-r from-primary via-primary-container to-secondary text-on-primary rounded-3xl p-8 md:p-14 overflow-hidden shadow-2xl flex flex-col md:flex-row items-center justify-between gap-8 border border-white/20">
            <div class="absolute -right-16 -top-16 w-80 h-80 rounded-full bg-white/20 blur-3xl pointer-events-none"></div>
            <div class="absolute -left-16 -bottom-16 w-72 h-72 rounded-full bg-black/30 blur-2xl pointer-events-none"></div>

            <div class="flex flex-col gap-4 max-w-2xl z-10">
                <span class="inline-flex items-center gap-2 px-3.5 py-1 rounded-full bg-white/20 text-white w-fit text-[11px] backdrop-blur-md font-bold">
                    <span class="material-symbols-outlined text-[16px]">rocket_launch</span>
                    Peluang Usaha Berkelanjutan 2025
                </span>
                <h2 class="text-[24px] md:text-[40px] font-extrabold tracking-tight leading-tight">
                    Ingin Gerai Anda Menjadi Bagian dari Cerita Sukses Kami?
                </h2>
                <p class="text-[14px] md:text-[16px] text-white/90 leading-relaxed">
                    Bergabunglah bersama 75+ mitra wirausaha di berbagai kota dan hadirkan kegembiraan rasa takoyaki autentik dengan sistem kemitraan teruji, tanpa royalti fee.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row items-center gap-4 shrink-0 z-10 w-full md:w-auto">
                <a href="{{ route('partnership') }}" class="w-full sm:w-auto px-7 py-3.5 rounded-full bg-white text-primary text-[15px] text-center shadow-xl hover:scale-105 transition-all font-bold hover:bg-surface-container-low">
                    Daftar Kemitraan
                </a>
                <a href="{{ route('menu') }}" class="w-full sm:w-auto px-6 py-3.5 rounded-full bg-white/15 hover:bg-white/25 text-white text-[14px] text-center backdrop-blur-md border border-white/30 transition-all font-semibold">
                    Lihat Menu Favorit
                </a>
            </div>
        </div>
    </div>
</section>