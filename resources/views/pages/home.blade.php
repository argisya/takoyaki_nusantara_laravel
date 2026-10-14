{{-- resources/views/pages/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Takoyaki Nusantara - Takoyaki Jepang Otentik Rasa Rempah Nusantara')
@section('meta_description', 'Takoyaki Jepang otentik dengan cita rasa rempah nusantara. 50+ outlet, 100% halal. Pesan via WhatsApp, GoFood, ShopeeFood.')

@section('content')

{{-- ===================== HERO ===================== --}}
<section class="relative w-full overflow-hidden bg-gradient-to-b from-surface via-surface-container-low to-surface py-12 lg:py-20">
    <div class="absolute -top-32 -left-20 w-96 h-96 bg-primary/10 rounded-full blur-3xl pointer-events-none"></div>
    <div class="absolute top-1/2 -right-24 w-80 h-80 bg-secondary-container/20 rounded-full blur-3xl pointer-events-none"></div>

    <div class="max-w-[1280px] w-full mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop relative z-10">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-12 items-center">

            {{-- Kiri: Copywriting --}}
            <div class="lg:col-span-6 flex flex-col gap-5">
                <div class="flex flex-wrap items-center gap-2">
                    <span class="inline-flex items-center gap-1 bg-surface-container-high px-3 py-1 rounded-full">
                        <span class="material-symbols-outlined text-primary text-[16px]">local_fire_department</span>
                        <span class="font-label-sm text-[11px] text-primary font-bold uppercase tracking-wider">
                            Street Food Jepang × Rempah Nusantara
                        </span>
                    </span>
                </div>

                <h1 class="font-display-hero text-[34px] leading-[1.15] sm:text-[42px] lg:text-[48px] text-on-surface font-bold tracking-tight">
                    Sensasi Takoyaki Jepang Otentik dengan
                    <span class="text-primary italic">Cita Rasa Rempah</span> Nusantara
                </h1>

                <p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl leading-relaxed">
                    Bola-bola emas renyah di luar, lembut di dalam, dengan rempah racikan khas nusantara yang menggoyang lidah.
                </p>

                {{-- CTA --}}
                <div class="flex flex-col sm:flex-row flex-wrap gap-3 pt-2">
                    @php
                        $waLink = 'https://wa.me/'.config('site.whatsapp').'?text='.urlencode(config('site.whatsapp_text'));
                    @endphp
                    <a href="{{ $waLink }}" target="_blank" rel="noopener"
                       class="inline-flex items-center justify-center gap-2 bg-primary hover:bg-primary-container text-on-primary px-6 py-3 rounded-xl shadow-lg hover:shadow-xl transition-all font-label-lg">
                        <span class="material-symbols-outlined text-[20px]">chat</span>
                        Pesan via WhatsApp
                    </a>
                    <a href="#menu-populer"
                       class="inline-flex items-center justify-center gap-2 bg-surface-container-lowest hover:bg-surface-container-high text-on-surface px-6 py-3 rounded-xl shadow-sm transition-all font-label-lg">
                        <span class="material-symbols-outlined text-primary text-[20px]">restaurant_menu</span>
                        Lihat Menu
                    </a>
                </div>

                {{-- Platform --}}
                <div class="flex flex-wrap items-center gap-2 pt-3">
                    <span class="font-label-sm text-[11px] text-on-surface-variant font-bold uppercase tracking-wider">
                        Tersedia di:
                    </span>
                    @foreach(['GoFood' => '#00AA13', 'ShopeeFood' => '#EE4D2D', 'GrabFood' => '#00B14F'] as $p => $c)
                        <div class="inline-flex items-center gap-1.5 bg-surface-container-lowest px-3 py-1 rounded-lg shadow-sm border border-outline-variant/40">
                            <span class="w-2.5 h-2.5 rounded-full" style="background: {{ $c }}"></span>
                            <span class="font-label-sm text-[11px] font-bold text-on-surface">{{ $p }}</span>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Kanan: Foto utama --}}
            <div class="lg:col-span-6 relative mt-4 lg:mt-0">
                <div class="relative mx-auto max-w-[540px] rounded-3xl overflow-hidden shadow-2xl bg-surface-container-low p-1.5">
                    <div class="rounded-2xl overflow-hidden relative aspect-[4/3] bg-surface-container-highest">
                        <img alt="Takoyaki Nusantara" 
                             class="w-full h-full object-cover transform hover:scale-105 transition-transform duration-700"
                             src="https://lh3.googleusercontent.com/aida/AEtjO1WTr9sZy5VBJcnKTdt1AQlX4tVcON5qX65NBntNcBK3q_CNQ-a-O_EJjG9mCqXW77zd5dZAvlmICc_nBESyMG6An4gHaTQsMbPXS4QPNkPIfly1NDcZ9NjsgF9JXyZnULliX3XYu6kykiiMheWlxHEVMhhEMZRp81p1Bo5i_Cm1-fN2z1nSVlADv18U5ua9sRV0fsF9vCgUiXzhLH2wl8Vq5A2ygvdD8bp7iixcBHsHg7D3vlGYmrgs9Ik">
                    </div>

                    {{-- Badge Rating --}}
                    <div class="absolute top-3 right-3 bg-white/95 backdrop-blur px-3 py-2 rounded-2xl shadow-xl flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-secondary-container/30 flex items-center justify-center">
                            <span class="material-symbols-outlined text-[20px] text-secondary" style="font-variation-settings:'FILL' 1;">star</span>
                        </div>
                        <div class="flex flex-col leading-none">
                            <span class="font-bold text-[15px] text-on-surface">4.9 / 5</span>
                            <span class="font-label-sm text-[10px] text-on-surface-variant">10.000+ ulasan</span>
                        </div>
                    </div>

                    {{-- Badge Halal --}}
                    <div class="absolute bottom-3 left-3 bg-white/95 backdrop-blur px-3 py-2 rounded-2xl shadow-xl flex items-center gap-2">
                        <div class="w-8 h-8 rounded-full bg-tertiary/15 flex items-center justify-center">
                            <span class="material-symbols-outlined text-tertiary text-[20px]">verified</span>
                        </div>
                        <span class="font-label-md text-label-md font-bold text-on-surface">100% Halal</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

{{-- ===================== STATS ===================== --}}
@include('components.home.stats')

{{-- ===================== KEUNGGULAN ===================== --}}
@include('components.home.features')

{{-- ===================== MENU POPULER ===================== --}}
@include('components.home.menu-section')

{{-- ===================== STORY ===================== --}}
@include('components.home.story')

{{-- ===================== OUTLET ===================== --}}
@include('components.home.outlets')

{{-- ===================== FINAL CTA ===================== --}}
@include('components.home.final-cta')

@endsection