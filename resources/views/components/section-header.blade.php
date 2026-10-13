{{-- resources/views/components/section-header.blade.php --}}
@props(['label','title','subtitle'=>null,'align'=>'center'])

<div class="max-w-2xl {{ $align === 'center' ? 'mx-auto text-center' : '' }} mb-10 flex flex-col gap-2">
    <span class="font-label-md text-[12px] text-primary uppercase font-bold tracking-widest">{{ $label }}</span>
    <h2 class="font-bold text-[26px] md:text-[32px] leading-tight text-on-surface">{{ $title }}</h2>
    @if($subtitle)
        <p class="text-[15px] text-on-surface-variant leading-relaxed">{{ $subtitle }}</p>
    @endif
</div>