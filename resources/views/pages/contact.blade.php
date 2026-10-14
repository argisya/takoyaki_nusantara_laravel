{{-- resources/views/pages/contact.blade.php --}}
@extends('layouts.app')

@section('title', 'Kontak & Hubungi Kami - Takoyaki Nusantara | CS Online 24/7')
@section('meta_description', 'Hubungi Takoyaki Nusantara: CS WhatsApp, konsultasi kemitraan, email resmi, dan alamat Head Office di Jakarta Selatan. Respon cepat <15 menit.')
@section('meta_keywords', 'kontak takoyaki nusantara, cs takoyaki, alamat takoyaki, whatsapp takoyaki, hubungi takoyaki')

@section('content')

@include('components.contact.hero')
@include('components.contact.channels')
@include('components.contact.form')
@include('components.contact.faq')
@include('components.contact.cta')

@endsection

@push('scripts')
<script>
  // Auto-hide alert sukses setelah 5 detik
  document.addEventListener('DOMContentLoaded', () => {
    const alert = document.getElementById('formSuccessAlert');
    if (alert && !alert.classList.contains('hidden')) {
      setTimeout(() => alert.classList.add('hidden'), 5000);
    }
  });
</script>
@endpush