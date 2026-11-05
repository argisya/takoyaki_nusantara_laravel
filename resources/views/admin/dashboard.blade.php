@extends('layouts.app')

@section('title', 'Dashboard Admin - Takoyaki Nusantara')

@section('content')
<section class="w-full py-6 bg-surface-container-low min-h-screen">
    <div class="max-w-[1280px] mx-auto px-margin md:px-margin-tablet lg:px-margin-desktop">
        
        {{-- Header Dashboard --}}
        <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-4 mb-6">
            <div>
                <h1 class="text-[24px] font-bold text-on-surface">Dashboard Analisis Penjualan</h1>
                <p class="text-[13px] text-on-surface-variant">Ringkasan performa omzet dan transaksi cabang outlet.</p>
            </div>
            
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="inline-flex items-center gap-1.5 px-4 py-2 bg-error/10 text-error hover:bg-error/20 rounded-xl text-[12px] font-bold transition-all">
                    <span class="material-symbols-outlined text-[16px]">logout</span>
                    Keluar Sesi
                </button>
            </form>
        </div>

        {{-- KPI Cards --}}
        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 mb-6">
            <div class="bg-surface-container-lowest p-4 rounded-2xl shadow-sm border border-outline-variant/30">
                <p class="text-[11px] font-bold uppercase tracking-wider text-on-surface-variant">Total Omzet Bulan Ini</p>
                <p class="text-[22px] font-bold text-primary mt-1">Rp {{ number_format($totalOmzetBulanIni, 0, ',', '.') }}</p>
            </div>
            <div class="bg-surface-container-lowest p-4 rounded-2xl shadow-sm border border-outline-variant/30">
                <p class="text-[11px] font-bold uppercase tracking-wider text-on-surface-variant">Total Porsi Terjual</p>
                <p class="text-[22px] font-bold text-secondary mt-1">{{ number_format($totalPorsiBulanIni, 0, ',', '.') }} Porsi</p>
            </div>
            <div class="bg-surface-container-lowest p-4 rounded-2xl shadow-sm border border-outline-variant/30">
                <p class="text-[11px] font-bold uppercase tracking-wider text-on-surface-variant">Cabang Aktif Beroperasi</p>
                <p class="text-[22px] font-bold text-tertiary mt-1">{{ $totalOutletAktif }} Outlet</p>
            </div>
        </div>

        {{-- Container Grafik Penjualan --}}
        <div class="bg-surface-container-lowest p-6 rounded-2xl shadow-sm border border-outline-variant/30">
            <div class="flex flex-col sm:flex-row items-start sm:items-center justify-between gap-3 mb-4">
                <div>
                    <h2 class="text-[16px] font-bold text-on-surface">Grafik Tren Penjualan</h2>
                    <p class="text-[12px] text-on-surface-variant">Visualisasi omzet harian</p>
                </div>
                
                {{-- Toggle Filter Mingguan / Bulanan --}}
                <div class="flex bg-surface-container p-1 rounded-xl gap-1">
                    <button id="btn-weekly" onclick="switchChart('weekly')" class="px-3 py-1.5 rounded-lg text-[12px] font-bold bg-primary text-on-primary shadow-sm transition-all">
                        7 Hari Terakhir
                    </button>
                    <button id="btn-monthly" onclick="switchChart('monthly')" class="px-3 py-1.5 rounded-lg text-[12px] font-bold text-on-surface-variant hover:text-on-surface transition-all">
                        30 Hari Terakhir
                    </button>
                </div>
            </div>

            {{-- Canvas Chart.js --}}
            <div class="relative w-full h-[320px]">
                <canvas id="salesChart"></canvas>
            </div>
        </div>

    </div>
</section>
@endsection

@push('scripts')
{{-- Load Chart.js CDN --}}
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const weeklyData = {
        labels: {!! json_encode($weeklySales->pluck('date')) !!},
        omzet: {!! json_encode($weeklySales->pluck('total_omzet')) !!}
    };

    const monthlyData = {
        labels: {!! json_encode($monthlySales->pluck('date')) !!},
        omzet: {!! json_encode($monthlySales->pluck('total_omzet')) !!}
    };

    const ctx = document.getElementById('salesChart').getContext('2d');
    let salesChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: weeklyData.labels,
            datasets: [{
                label: 'Omzet Penjualan (Rp)',
                data: weeklyData.omzet,
                borderColor: '#e02828',
                backgroundColor: 'rgba(224, 40, 40, 0.1)',
                fill: true,
                tension: 0.3,
                pointRadius: 4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: { display: false }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        callback: function(value) {
                            return 'Rp ' + value.toLocaleString('id-ID');
                        }
                    }
                }
            }
        }
    });

    function switchChart(type) {
        const btnWeekly = document.getElementById('btn-weekly');
        const btnMonthly = document.getElementById('btn-monthly');

        if (type === 'weekly') {
            salesChart.data.labels = weeklyData.labels;
            salesChart.data.datasets[0].data = weeklyData.omzet;
            btnWeekly.className = "px-3 py-1.5 rounded-lg text-[12px] font-bold bg-primary text-on-primary shadow-sm transition-all";
            btnMonthly.className = "px-3 py-1.5 rounded-lg text-[12px] font-bold text-on-surface-variant hover:text-on-surface transition-all";
        } else {
            salesChart.data.labels = monthlyData.labels;
            salesChart.data.datasets[0].data = monthlyData.omzet;
            btnMonthly.className = "px-3 py-1.5 rounded-lg text-[12px] font-bold bg-primary text-on-primary shadow-sm transition-all";
            btnWeekly.className = "px-3 py-1.5 rounded-lg text-[12px] font-bold text-on-surface-variant hover:text-on-surface transition-all";
        }
        salesChart.update();
    }
</script>
@endpush