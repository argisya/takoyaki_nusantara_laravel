<section class="relative w-full bg-surface-container-low overflow-hidden pb-16 pt-8">
    <div class="w-full max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">

        {{-- Breadcrumb --}}
        <nav aria-label="Breadcrumb" class="flex items-center gap-2 text-on-surface-variant text-[13px] mb-8">
            <a href="{{ route('home') }}" class="hover:text-primary transition-colors flex items-center gap-1">
                <span class="material-symbols-outlined text-[16px]">home</span>
                <span>Beranda</span>
            </a>
            <span class="material-symbols-outlined text-[14px] text-outline">chevron_right</span>
            <span class="text-primary font-bold">Tentang Kami</span>
        </nav>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

            <div class="lg:col-span-7 flex flex-col gap-5">
                <span class="inline-flex items-center gap-2 bg-surface-container-high px-3 py-1 rounded-full w-fit shadow-sm">
                    <span class="material-symbols-outlined text-primary text-[16px]">verified</span>
                    <span class="text-[11px] text-primary uppercase tracking-widest font-bold">🏢 Profil Resmi & Brand Story</span>
                </span>

                <h1 class="font-bold text-[30px] leading-tight sm:text-[38px] lg:text-[48px] tracking-tight">
                    Membawa Cita Rasa Osaka, Diracik dengan Hangatnya
                    <span class="text-primary underline decoration-secondary-container decoration-4 underline-offset-8">Rempah Nusantara</span>
                </h1>

                <p class="text-[15px] lg:text-[16px] text-on-surface-variant max-w-2xl leading-relaxed">
                    Pelopor brand kuliner street food fusion nomor 1 di Indonesia yang memadukan resep otentik Dotonbori Osaka dengan kekayaan 9 rempah kepulauan Nusantara. Renyah garing di luar, lumer lembut gurih di dalam, 100% Halal tanpa mirin atau sake.
                </p>

                <div class="flex flex-wrap items-center gap-3 pt-2">
                    <a href="#cerita-kami" class="inline-flex items-center gap-2 bg-primary hover:bg-primary-container text-on-primary px-5 py-3 rounded-xl shadow-md transition-all text-[14px] font-semibold">
                        <span>Pelajari Kisah Kami</span>
                        <span class="material-symbols-outlined text-[18px]">arrow_downward</span>
                    </a>
                    <a href="{{ route('partnership') }}" class="inline-flex items-center gap-2 bg-surface-container-lowest hover:bg-surface-container text-primary px-5 py-3 rounded-xl shadow-sm transition-all text-[14px] font-semibold border border-outline-variant/40">
                        <span>Profil Kemitraan UMKM</span>
                        <span class="material-symbols-outlined text-[18px]">open_in_new</span>
                    </a>
                </div>
            </div>

            <div class="lg:col-span-5 relative">
                <div class="relative rounded-3xl overflow-hidden bg-surface-container-lowest shadow-xl">
                    <img alt="Live cooking Takoyaki Nusantara"
                         class="w-full h-80 lg:h-96 object-cover"
                         src="https://lh3.googleusercontent.com/aida-public/AB6AXuAAXyKF1BXR7YYX46wbIZETpn9tTZg2PDUXJDQ9eShGAQ5q3Pf6dWmiJElyZceNuoS0mf3gYMFx5tALqFH7QyCNt7gFyg-vmYa4Gt8lLQtv1Y8vnHXN_GBXwAlmlDeje00F2vZgPWTziUk6gfkgZE1PdI0n4E-Tnb6w625zc2qewd_ibq7nZdPixhoYbutM3eZgrA35btNPY8TaVt_2MH3r_wIpvOyn4mse_NnXJk2Ho9s5wU9Vi2s3">

                    <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>

                    <div class="absolute top-4 left-4 bg-white/95 backdrop-blur-md px-3 py-1.5 rounded-full flex items-center gap-2 shadow-md">
                        <span class="material-symbols-outlined text-secondary text-[18px]">skillet</span>
                        <span class="text-[11px] font-bold text-on-surface">Live Cooking Higienis</span>
                    </div>

                    <div class="absolute bottom-4 left-4 right-4 bg-white/95 backdrop-blur-md p-3 rounded-2xl flex items-center justify-between shadow-lg">
                        <div class="flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center text-primary">
                                <span class="material-symbols-outlined text-[22px]">local_fire_department</span>
                            </div>
                            <div class="leading-tight">
                                <h3 class="text-[14px] font-bold text-on-surface">Racikan 9 Rempah Alami</h3>
                                <p class="text-[11px] text-on-surface-variant">Aroma gurih harum khas nusantara</p>
                            </div>
                        </div>
                        <span class="text-[10px] uppercase bg-secondary-container text-on-secondary-container px-2.5 py-1 rounded-full font-bold">Fresh Daily</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>