{{-- resources/views/pages/home.blade.php --}}
@extends('layouts.app')

@section('title', 'Takoyaki Nusantara - Takoyaki Jepang Otentik Rasa Rempah Nusantara')
@section('meta_description', 'Takoyaki Jepang otentik dengan cita rasa rempah nusantara. 7 cabang aktif, 100% halal. Pesan via WhatsApp, GoFood, ShopeeFood.')

@section('content')

{{-- ===================== HERO ===================== --}}
@include('components.home.banner')

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