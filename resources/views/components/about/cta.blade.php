<section class="w-full py-14 bg-surface">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        <div class="relative bg-gradient-to-r from-primary to-primary-container text-on-primary rounded-3xl p-6 md:p-10 overflow-hidden shadow-xl">
            <div class="relative z-10 grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">

                <div class="lg:col-span-8 flex flex-col gap-3">
                    <span class="inline-flex items-center gap-2 bg-white/20 backdrop-blur-sm px-3 py-1 rounded-full w-fit">
                        <span class="material-symbols-outlined text-[16px]">moped</span>
                        <span class="text-[11px] uppercase tracking-wider font-bold">Lapar? Takoyaki Hangat Siap Meluncur</span>
                    </span>
                    <h2 class="text-[26px] lg:text-[36px] font-bold tracking-tight leading-tight">
                        Nikmati Gurihnya Takoyaki Nusantara Hari Ini
                    </h2>
                    <p class="text-[14px] lg:text-[15px] opacity-90 max-w-2xl leading-relaxed">
                        Kunjungi booth terdekat atau pesan langsung lewat GoFood, ShopeeFood, dan GrabFood. Mau mulai berbisnis kuliner bersama kami? Dapatkan paket kemitraan lengkap siap jualan.
                    </p>
                </div>

                <div class="lg:col-span-4 flex flex-col sm:flex-row lg:flex-col gap-3">
                    <a href="{{ route('home') }}#outlet" class="inline-flex items-center justify-center gap-2 bg-white hover:bg-surface text-primary px-5 py-3.5 rounded-xl font-semibold shadow-md transition-all text-[14px]">
                        <span class="material-symbols-outlined text-[20px]">location_on</span>
                        <span>Temukan Outlet</span>
                    </a>
                    <a href="{{ route('partnership') }}" class="inline-flex items-center justify-center gap-2 bg-secondary-container hover:bg-secondary text-on-secondary px-5 py-3.5 rounded-xl font-semibold shadow-md transition-all text-[14px]">
                        <span class="material-symbols-outlined text-[20px]">store</span>
                        <span>Pelajari Kemitraan</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>