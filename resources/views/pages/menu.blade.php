{{-- resources/views/pages/menu.blade.php --}}
@extends('layouts.app')

@section('title', 'Menu & Varian - Takoyaki Nusantara | Paket 4, 6, 10, 16 Butir')
@section('meta_description', 'Katalog lengkap Takoyaki Nusantara: paket 4/6/10/16 butir dengan pilihan saus Tare Osaka, Sambal Matah Bali, Mentai Torched. Mulai Rp 15.000. Halal 100%.')
@section('meta_keywords', 'menu takoyaki, paket takoyaki, harga takoyaki, takoyaki mentai, takoyaki sambal matah, takoyaki halal')

@section('content')

@include('components.menu.hero')
@include('components.menu.packages')
@include('components.menu.sauces')
@include('components.menu.estimator')
@include('components.menu.how-to-order')
@include('components.menu.outlet-faq')
@include('components.menu.cta')

@endsection

@push('scripts')
<script>
  // ==== Live Order Estimator ====
  let currentPackage = {
    id: 'reguler',
    name: 'Paket Personal Reguler (6 Butir)',
    basePrice: 20000
  };
  let selectedAddons = {};
  let currentQuantity = 1;

  function updateOrderDisplay() {
    const pkgNameEl  = document.getElementById('summary-pkg-name');
    const pkgPriceEl = document.getElementById('summary-pkg-price');
    const totalEl    = document.getElementById('summary-total');
    const addonsListEl = document.getElementById('summary-addons');
    const qtyEl      = document.getElementById('order-qty');
    if (!pkgNameEl || !totalEl) return;

    pkgNameEl.innerText  = currentPackage.name;
    pkgPriceEl.innerText = 'Rp ' + currentPackage.basePrice.toLocaleString('id-ID');
    qtyEl.innerText      = currentQuantity;

    const addonKeys = Object.keys(selectedAddons);
    let addonsTotal = 0;
    if (addonKeys.length === 0) {
      addonsListEl.innerHTML = '<span class="text-on-surface-variant italic">Belum ada topping tambahan</span>';
    } else {
      addonsListEl.innerHTML = '';
      addonKeys.forEach(name => {
        const price = selectedAddons[name];
        addonsTotal += price;
        const div = document.createElement('div');
        div.className = 'flex justify-between items-center text-on-surface';
        div.innerHTML = `<span>+ ${name}</span><span class="font-bold">Rp ${price.toLocaleString('id-ID')}</span>`;
        addonsListEl.appendChild(div);
      });
    }

    const total = (currentPackage.basePrice + addonsTotal) * currentQuantity;
    totalEl.innerText = 'Rp ' + total.toLocaleString('id-ID');
  }

  function setPackage(id, price, name) {
    currentPackage = { id, basePrice: price, name };
    document.querySelectorAll('.pkg-btn').forEach(btn => {
      btn.className = btn.getAttribute('data-pkg') === id
        ? 'pkg-btn p-3 rounded-xl text-left transition-all bg-primary-container text-on-primary-container shadow-md'
        : 'pkg-btn p-3 rounded-xl text-left transition-all bg-surface-container-low text-on-surface';
    });
    updateOrderDisplay();
  }

  function selectPackageEstimator(id, price, name) {
    setPackage(id, price, name);
    document.getElementById('package-selector-group')?.scrollIntoView({ behavior:'smooth', block:'center' });
  }

  function toggleAddon(checkbox, price, name) {
    if (checkbox.checked) selectedAddons[name] = price;
    else delete selectedAddons[name];
    updateOrderDisplay();
  }

  function changeQty(delta) {
    currentQuantity = Math.max(1, currentQuantity + delta);
    updateOrderDisplay();
  }

  document.addEventListener('DOMContentLoaded', updateOrderDisplay);
</script>
@endpush