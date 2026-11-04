<div id="video-modal" class="fixed inset-0 z-[60] bg-black/80 backdrop-blur-md hidden items-center justify-center p-4">
    <div class="relative w-full max-w-4xl bg-black rounded-3xl overflow-hidden shadow-2xl border border-white/20 flex flex-col">
        <div class="flex items-center justify-between p-4 bg-black/60 text-white border-b border-white/10">
            <div class="flex items-center gap-2">
                <span class="material-symbols-outlined text-primary">play_circle</span>
                <span class="font-bold text-[13px]">Pemutaran Cuplikan Resmi Takoyaki Nusantara</span>
            </div>
            <button id="close-video-modal" class="w-9 h-9 rounded-full bg-white/20 hover:bg-white/40 text-white flex items-center justify-center transition-all">
                <span class="material-symbols-outlined text-[20px]">close</span>
            </button>
        </div>
        <div class="relative aspect-video w-full bg-zinc-950">
            <video id="gallery-video-player"
                   class="absolute inset-0 w-full h-full object-contain"
                   controls
                   playsinline
                   preload="none"
                   poster="{{ asset('images/gallery-video-poster.png') }}">
                <source src="{{ asset('videos/VID-20261001-WA0019.mp4') }}" type="video/mp4">
                Browser Anda tidak mendukung pemutaran video.
            </video>
            <p id="gallery-video-error" class="hidden absolute inset-x-4 bottom-4 rounded-lg bg-black/80 p-3 text-center text-sm text-white" role="alert">
                Video gagal diputar. Silakan coba lagi.
            </p>
        </div>
    </div>
</div>