{{-- resources/views/pages/about.blade.php --}}
@extends('layouts.app')

@section('title', 'Tentang Kami - Takoyaki Nusantara | Profil Resmi Perusahaan')
@section('meta_description', 'Profil resmi Takoyaki Nusantara — didirikan tahun 2024 oleh mahasiswa, kini berkembang menjadi brand kuliner dengan 7 cabang aktif dan peluang kemitraan.')
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