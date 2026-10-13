{{-- resources/views/components/menu-card.blade.php --}}
@props(['img','badge','name','desc','price','rating'])

@php
    $wa = 'https://wa.me/'.config('site.whatsapp').'?text='.urlencode("Halo, saya ingin pesan {$name} 🐙");
@endphp

<article class="bg-surface-container-lowest rounded-2xl overflow-hidden shadow-sm hover:shadow-xl transition-all flex flex-col group border border-outline-variant/30">
    <div class="relative h-48 overflow-hidden bg-surface-container-high">
        <img src="{{ $img }}" alt="{{ $name }}" loading="lazy"
             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
        <span class="absolute top-3 left-3 bg-primary text-on-primary text-[10px] font-bold px-2.5 py-1 rounded-full uppercase tracking-wider">
            {{ $badge }}
        </span>
        <div class="absolute bottom-3 right-3 bg-white/95 backdrop-blur px-2.5 py-1 rounded-md font-bold text-[14px]">
            Rp {{ $price }}
        </div>
    </div>

    <div class="p-4 flex flex-col flex-grow justify-between gap-3">
        <div class="flex flex-col gap-1.5">
            <h3 class="font-bold text-[16px] text-on-surface leading-snug">{{ $name }}</h3>
            <p class="text-[12.5px] text-on-surface-variant line-clamp-2 leading-relaxed">{{ $desc }}</p>
            <div class="flex items-center gap-1 mt-1">
                <span class="material-symbols-outlined text-[15px] text-secondary" style="font-variation-settings:'FILL' 1;">star</span>
                <span class="text-[12px] font-semibold">{{ $rating }}</span>
            </div>
        </div>

        <a href="{{ $wa }}" target="_blank" rel="noopener"
           class="w-full bg-primary hover:bg-primary-container text-on-primary transition-all py-2.5 rounded-xl text-[13px] font-semibold flex items-center justify-center gap-1.5 shadow-sm">
            <span class="material-symbols-outlined text-[16px]">chat</span>
            Pesan Sekarang
        </a>
    </div>
</article>