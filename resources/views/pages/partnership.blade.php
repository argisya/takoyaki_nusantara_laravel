{{-- resources/views/pages/partnership.blade.php --}}
@extends('layouts.app')

@section('title', 'Kemitraan & Franchise - Takoyaki Nusantara | ROI 2-4 Bulan')
@section('meta_description', 'Jadi mitra Takoyaki Nusantara: tanpa royalty fee, BEP 2-4 bulan, paket mulai Rp 14,5 juta. Sistem teruji dengan 50+ mitra aktif di 12 kota.')
@section('meta_keywords', 'franchise takoyaki, kemitraan takoyaki, peluang usaha kuliner, franchise murah, usaha takoyaki')

@section('content')

@include('components.partnership.hero')
@include('components.partnership.pillars')
@include('components.partnership.packages')
@include('components.partnership.facilities')
@include('components.partnership.roi')
@include('components.partnership.schemes')
@include('components.partnership.steps')
@include('components.partnership.form')
@include('components.partnership.faq')
@include('components.partnership.cta')

@endsection

@push('scripts')
<script>
  document.addEventListener('DOMContentLoaded', () => {

    /* ============ FAQ ACCORDION ============ */
    document.querySelectorAll('.faq-trigger').forEach(trigger => {
      trigger.addEventListener('click', () => {
        const item = trigger.closest('.faq-item');
        const content = item.querySelector('.faq-content');
        const icon = trigger.querySelector('.material-symbols-outlined');
        const isHidden = content.classList.contains('hidden');

        document.querySelectorAll('.faq-content').forEach(c => c.classList.add('hidden'));
        document.querySelectorAll('.faq-trigger .material-symbols-outlined').forEach(i => i.style.transform = 'rotate(0deg)');

        if (isHidden) {
          content.classList.remove('hidden');
          icon.style.transform = 'rotate(180deg)';
        }
      });
    });

    /* ============ ROI SIMULATOR ============ */
    const slider = document.getElementById('roi-slider');
    const sliderLabel = document.getElementById('slider-label');
    const calcOmset = document.getElementById('calc-omset');
    const calcHpp = document.getElementById('calc-hpp');
    const calcNet = document.getElementById('calc-net');
    const calcBep = document.getElementById('calc-bep');

    const fmt = n => 'Rp ' + n.toLocaleString('id-ID');

    function updateROI() {
      const portions = parseInt(slider.value, 10);
      sliderLabel.textContent = portions + ' Porsi';

      const omset = portions * 20000 * 30;
      const hpp = omset * 0.45;
      const gross = omset - hpp;
      const net = gross - 5500000;

      calcOmset.textContent = fmt(omset);
      calcHpp.textContent = fmt(hpp);
      calcNet.textContent = fmt(Math.max(net, 0));

      if (net > 0) {
        const bep = (22500000 / net).toFixed(1);
        calcBep.textContent = 'Estimasi Balik Modal Paket Semi-Container: ~' + bep + ' Bulan';
      } else {
        calcBep.textContent = 'Perlu peningkatan target porsi di atas beban operasional.';
      }
    }

    if (slider) {
      slider.addEventListener('input', updateROI);
      updateROI();
    }
  });
</script>
@endpush