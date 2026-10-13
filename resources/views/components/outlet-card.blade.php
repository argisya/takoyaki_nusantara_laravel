@props(['city','name','addr','hours'])

@php
    $gmap = 'https://www.google.com/maps/search/'.urlencode($name.' '.$addr);
    $wa   = 'https://wa.me/'.config('site.whatsapp').'?text='.urlencode("Halo, saya mau pesan dari {$name}");
@endphp

<article class="bg-surface-container-lowest rounded-2xl p-4 shadow-sm hover:shadow-lg transition-all flex flex-col justify-between gap-4 border border-outline-variant/30">
    <div class="flex flex-col gap-3">
        <div class="flex items-center justify-between">
            <span class="text-[11px] bg-surface-container-high px-2.5 py-1 rounded-full font-bold">{{ $city }}</span>
            <span class="inline-flex items-center gap-1 text-tertiary text-[11px] font-semibold">
                <span class="w-2 h-2 rounded-full bg-tertiary inline-block animate-pulse"></span> Buka
            </span>
        </div>
        <h3 class="font-bold text-[15px]">{{ $name }}</h3>
        <p class="text-[12px] text-on-surface-variant">{{ $addr }}</p>
        <div class="flex items-center gap-1.5 text-on-surface-variant text-[12px]">
            <span class="material-symbols-outlined text-[14px] text-primary">schedule</span>
            <span>{{ $hours }}</span>
        </div>

        <div class="grid grid-cols-3 gap-1 pt-1">
            <a href="{{ $wa }}" target="_blank" class="bg-[#00AA13]/10 hover:bg-[#00AA13]/20 text-[#006e0d] py-1.5 rounded-lg text-[11px] font-bold text-center">GoFood</a>
            <a href="{{ $wa }}" target="_blank" class="bg-[#EE4D2D]/10 hover:bg-[#EE4D2D]/20 text-[#ba3014] py-1.5 rounded-lg text-[11px] font-bold text-center">ShopeeFood</a>
            <a href="{{ $wa }}" target="_blank" class="bg-[#00B14F]/10 hover:bg-[#00B14F]/20 text-[#027535] py-1.5 rounded-lg text-[11px] font-bold text-center">GrabFood</a>
        </div>
    </div>

    <a href="{{ $gmap }}" target="_blank"
       class="w-full bg-surface-container-low hover:bg-surface-container text-on-surface py-2 rounded-xl text-[12px] font-semibold flex items-center justify-center gap-1.5 transition-colors">
        <span class="material-symbols-outlined text-[16px] text-primary">map</span>
        Buka Google Maps
    </a>
</article>