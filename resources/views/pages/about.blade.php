{{-- resources/views/pages/about.blade.php --}}
@extends('layouts.app')

@section('title', 'Tentang Kami - Takoyaki Nusantara | Profil Resmi Perusahaan')
@section('meta_description', 'Profil resmi Takoyaki Nusantara — brand street food fusion nomor 1 di Indonesia. Perjalanan sejak 2020 dari gerobak di Yogyakarta hingga 50+ outlet di 12 kota.')
@section('meta_keywords', 'tentang takoyaki nusantara, profil perusahaan, brand story takoyaki, franchise takoyaki halal')

@section('content')

@include('components.about.hero')
@include('components.about.stats')
@include('components.about.story')
@include('components.about.philosophy')
@include('components.about.vision-mission')
@include('components.about.values')
@include('components.about.cta')

@endsection