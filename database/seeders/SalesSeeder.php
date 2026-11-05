<?php

namespace Database\Seeders;

use App\Models\Outlet;
use App\Models\Sales;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class SalesSeeder extends Seeder
{
    public function run(): void
    {
        $outlets = Outlet::all();
        if ($outlets->isEmpty()) {
            return;
        }

        // Generate data penjualan harian untuk 30 hari terakhir
        for ($i = 30; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i);

            foreach ($outlets as $outlet) {
                // Jangan buat penjualan jika outlet sedang libur/tutup
                if (! $outlet->is_open && $i < 5) {
                    continue;
                }

                // Tiap outlet memiliki 3 - 8 transaksi per hari (simulasi)
                $transactionCount = rand(3, 8);

                for ($t = 1; $t <= $transactionCount; $t++) {
                    $porsi = rand(2, 10); // 2 - 10 porsi takoyaki per transaksi
                    $hargaPerPorsi = 25000; // Rp 25.000 / porsi
                    $totalPrice = $porsi * $hargaPerPorsi;

                    // Buat jam acak antara jam 10:00 - 21:00 WIB
                    $randomTime = $date->copy()->setHour(rand(10, 21))->setMinute(rand(0, 59));
                    $invoiceNumber = 'INV/'.$randomTime->format('Ymd').'/'.$outlet->id_outlet.'/'.str_pad((string) $t, 3, '0', STR_PAD_LEFT);

                    Sales::updateOrCreate(
                        ['invoice_number' => $invoiceNumber],
                        [
                            'id_outlet' => $outlet->id_outlet,
                            'total_price' => $totalPrice,
                            'total_items' => $porsi,
                            'sale_date' => $randomTime,
                        ]
                    );
                }
            }
        }
    }
}
