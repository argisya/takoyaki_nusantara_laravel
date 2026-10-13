@extends('layouts.app')

@section('title', 'Kemitraan / Franchise - Takoyaki Nusantara')
@section('meta_description', 'Bergabung jadi mitra Takoyaki Nusantara. Sistem operasional matang, supply terjamin, ROI cepat.')

@section('content')
<section class="w-full py-14 lg:py-20 bg-surface">
    <div class="max-w-[720px] w-full mx-auto px-margin md:px-margin-tablet">

        <x-section-header
            label="Peluang Bisnis"
            title="Formulir Pendaftaran Kemitraan"
            subtitle="Isi data di bawah, tim kami akan menghubungi Anda maksimal 1×24 jam." />

        @if(session('success'))
            <div class="mb-6 p-4 bg-tertiary/10 text-tertiary border border-tertiary/30 rounded-xl">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('partnership.store') }}" method="POST"
              class="bg-surface-container-lowest rounded-3xl p-6 md:p-8 shadow-sm border border-outline-variant/30 flex flex-col gap-5">
            @csrf

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex flex-col gap-1.5">
                    <label class="text-[12px] font-bold text-on-surface-variant">Nama Lengkap *</label>
                    <input type="text" name="name" required value="{{ old('name') }}"
                           class="px-4 py-2.5 rounded-xl border border-outline-variant/50 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-[14px]">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-[12px] font-bold text-on-surface-variant">Nomor WhatsApp *</label>
                    <input type="tel" name="phone" required value="{{ old('phone') }}" placeholder="08xxxxxxxxxx"
                           class="px-4 py-2.5 rounded-xl border border-outline-variant/50 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-[14px]">
                </div>
            </div>

            <div class="flex flex-col gap-1.5">
                <label class="text-[12px] font-bold text-on-surface-variant">Email</label>
                <input type="email" name="email" value="{{ old('email') }}"
                       class="px-4 py-2.5 rounded-xl border border-outline-variant/50 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-[14px]">
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="flex flex-col gap-1.5">
                    <label class="text-[12px] font-bold text-on-surface-variant">Kota Rencana Outlet *</label>
                    <input type="text" name="city" required value="{{ old('city') }}"
                           class="px-4 py-2.5 rounded-xl border border-outline-variant/50 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-[14px]">
                </div>
                <div class="flex flex-col gap-1.5">
                    <label class="text-[12px] font-bold text-on-surface-variant">Estimasi Budget *</label>
                    <select name="budget" required
                            class="px-4 py-2.5 rounded-xl border border-outline-variant/50 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-[14px]">
                        <option value="">-- Pilih --</option>
                        <option>Rp 15 - 25 juta</option>
                        <option>Rp 25 - 50 juta</option>
                        <option>> Rp 50 juta</option>
                    </select>
                </div>
            </div>

            <div class="flex flex-col gap-1.5">
                <label class="text-[12px] font-bold text-on-surface-variant">Pesan Tambahan</label>
                <textarea name="message" rows="4"
                          class="px-4 py-2.5 rounded-xl border border-outline-variant/50 focus:border-primary focus:ring-2 focus:ring-primary/20 outline-none text-[14px] resize-none">{{ old('message') }}</textarea>
            </div>

            <button type="submit"
                    class="mt-2 inline-flex items-center justify-center gap-2 bg-primary hover:bg-primary-container text-on-primary px-6 py-3.5 rounded-xl font-bold shadow-md transition-all">
                <span class="material-symbols-outlined text-[20px]">handshake</span>
                Kirim Pendaftaran
            </button>
        </form>
    </div>
</section>
@endsection