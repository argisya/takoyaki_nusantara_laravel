@extends('layouts.app')

@section('title', 'Login Admin - Takoyaki Nusantara')

@section('content')
<section class="w-full min-h-[calc(100vh-200px)] flex items-center justify-center py-12 px-4">
    <div class="w-full max-w-md bg-surface-container-lowest border border-outline-variant/40 rounded-2xl shadow-xl p-6 sm:p-8">
        
        {{-- Header Form --}}
        <div class="text-center mb-6">
            <div class="w-12 h-12 bg-primary/10 rounded-full flex items-center justify-center mx-auto mb-3">
                <span class="material-symbols-outlined text-primary text-[28px]">admin_panel_settings</span>
            </div>
            <h1 class="text-[22px] font-bold text-on-surface">Panel Login Admin</h1>
            <p class="text-[12.5px] text-on-surface-variant mt-1">Masuk untuk mengelola data outlet dan laporan grafik penjualan.</p>
        </div>

        {{-- Alert Flash Message --}}
        @if(session('success'))
            <div class="mb-4 p-3 bg-tertiary/10 border border-tertiary/30 rounded-xl text-tertiary text-[12px] font-semibold flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px]">check_circle</span>
                <span>{{ session('success') }}</span>
            </div>
        @endif

        @if(session('error'))
            <div role="alert" class="mb-4 p-3 bg-error/10 border border-error/30 rounded-xl text-error text-[12px] font-semibold flex items-center gap-2">
                <span class="material-symbols-outlined text-[18px]">error</span>
                <span>{{ session('error') }}</span>
            </div>
        @endif

        {{-- Form Login (Tanpa Registrasi) --}}
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf

            {{-- Input Email --}}
            <div>
                <label for="email" class="block text-[12px] font-bold text-on-surface mb-1">Alamat Email</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant/60 text-[18px]">mail</span>
                    <input type="email" name="email" id="email" value="{{ old('email') }}" required autofocus
                           class="w-full pl-10 pr-4 py-2.5 bg-surface-container rounded-xl text-[13px] text-on-surface border border-transparent focus:border-primary/40 focus:ring-2 focus:ring-primary/20 outline-none transition-all @error('email') border-error @enderror"
                           placeholder="admin@takoyakinusantara.com">
                </div>
                @error('email')
                    <p class="text-error text-[11px] mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Input Password --}}
            <div>
                <label for="password" class="block text-[12px] font-bold text-on-surface mb-1">Password</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3.5 top-1/2 -translate-y-1/2 text-on-surface-variant/60 text-[18px]">lock</span>
                    <input type="password" name="password" id="password" required
                           class="w-full pl-10 pr-12 py-2.5 bg-surface-container rounded-xl text-[13px] text-on-surface border border-transparent focus:border-primary/40 focus:ring-2 focus:ring-primary/20 outline-none transition-all"
                           placeholder="••••••••">
                    <button type="button" id="toggle-password-visibility" aria-label="Tampilkan password" aria-controls="password" aria-pressed="false"
                            class="absolute right-3 top-1/2 -translate-y-1/2 text-on-surface-variant/70 hover:text-primary focus:outline-none focus:ring-2 focus:ring-primary/30 rounded p-1 transition-colors">
                        <span class="material-symbols-outlined text-[18px]" aria-hidden="true">visibility</span>
                    </button>
                </div>
                @error('password')
                    <p class="text-error text-[11px] mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Option Remember Me --}}
            <div class="flex items-center justify-between pt-1">
                <label class="flex items-center gap-2 cursor-pointer select-none">
                    <input type="checkbox" name="remember" class="rounded border-outline-variant text-primary focus:ring-primary/20">
                    <span class="text-[12px] text-on-surface-variant">Ingat Sesi Saya</span>
                </label>
            </div>

            {{-- Submit Button --}}
            <button type="submit"
                    class="w-full mt-2 py-3 bg-primary text-on-primary hover:bg-primary-container font-bold rounded-xl text-[13px] shadow-md transition-all flex items-center justify-center gap-2">
                <span class="material-symbols-outlined text-[18px]">login</span>
                Masuk ke Dashboard
            </button>
        </form>

        <div class="mt-6 text-center pt-4 border-t border-outline-variant/30">
            <p class="text-[11px] text-on-surface-variant">
                Sistem Terproteksi Admin — Takoyaki Nusantara &copy; {{ date('Y') }}
            </p>
        </div>
    </div>
</section>
@endsection

@push('scripts')
<script>
    const passwordInput = document.getElementById('password');
    const passwordToggle = document.getElementById('toggle-password-visibility');

    passwordToggle?.addEventListener('click', () => {
        const isVisible = passwordInput.type === 'text';
        passwordInput.type = isVisible ? 'password' : 'text';
        passwordToggle.setAttribute('aria-pressed', String(!isVisible));
        passwordToggle.setAttribute('aria-label', isVisible ? 'Tampilkan password' : 'Sembunyikan password');
        passwordToggle.querySelector('.material-symbols-outlined').textContent = isVisible ? 'visibility' : 'visibility_off';
    });
</script>
@endpush