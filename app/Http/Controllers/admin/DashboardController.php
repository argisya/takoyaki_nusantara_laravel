<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Sales;
use App\Models\Outlet;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        // 1. Data Grafik Penjualan 7 Hari Terakhir (Seminggu)
        $weeklySales = Sales::where('sale_date', '>=', Carbon::now()->subDays(7))
            ->selectRaw('DATE(sale_date) as date, SUM(total_price) as total_omzet, SUM(total_items) as total_porsi')
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        // 2. Data Grafik Penjualan 30 Hari Terakhir (Sebulan)
        $monthlySales = Sales::where('sale_date', '>=', Carbon::now()->subDays(30))
            ->selectRaw('DATE(sale_date) as date, SUM(total_price) as total_omzet, SUM(total_items) as total_porsi')
            ->groupBy('date')
            ->orderBy('date', 'ASC')
            ->get();

        // Ringkasan KPI Cards
        $totalOmzetBulanIni = Sales::whereMonth('sale_date', Carbon::now()->month)->sum('total_price');
        $totalPorsiBulanIni = Sales::whereMonth('sale_date', Carbon::now()->month)->sum('total_items');
        $totalOutletAktif   = Outlet::where('is_open', true)->count();

        return view('admin.dashboard', [
            'weeklySales' => $weeklySales, 
            'monthlySales'=> $monthlySales, 
            'totalOmzetBulanIni'=> $totalOmzetBulanIni, 
            'totalPorsiBulanIni'=> $totalPorsiBulanIni, 
            'totalOutletAktif' => $totalOutletAktif
        ]);
    }
}