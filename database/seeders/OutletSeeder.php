<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Outlet;

class OutletSeeder extends Seeder
{
    public function run(): void
    {
        $outlets = [
            [
                'name'        => 'Outlet Karadenan',
                'city'        => 'bogor',
                'address'     => 'Jl. Raya Karadenan, Cibinong, Kab. Bogor, Jawa Barat',
                'phone'       => config('site.whatsapp', '6281234567801'),
                'is_open'     => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Outlet Cibinong',
                'city'        => 'bogor',
                'address'     => 'Kawasan Cibinong, Kab. Bogor, Jawa Barat',
                'phone'       => config('site.whatsapp', '6281234567802'),
                'is_open'     => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Outlet Malioboro Hub',
                'city'        => 'yogyakarta',
                'address'     => 'Jl. Malioboro No. 115, Sosromenduran, Gedong Tengen, Kota Yogyakarta 55271',
                'phone'       => config('site.whatsapp', '6281234567803'),
                'is_open'     => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Outlet UIKA',
                'city'        => 'bogor',
                'address'     => 'Kawasan Kampus Universitas Ibn Khaldun (UIKA), Jl. KH. Sholeh Iskandar, Kota Bogor',
                'phone'       => config('site.whatsapp', '6281234567804'),
                'is_open'     => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Outlet Tanjung Duren',
                'city'        => 'jakarta',
                'address'     => 'Jl. Tanjung Duren Barat I No. 19, Grogol Petamburan, Jakarta Barat 11470 (dekat Pasar Kopro)',
                'phone'       => config('site.whatsapp', '6281234567805'),
                'is_open'     => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Outlet Dewi Sri Kuta',
                'city'        => 'bali',
                'address'     => 'Jl. Dewi Sri No. 88A, Legian, Kuta, Kab. Badung, Bali 80361 (depan Food Plaza Dewi Sri)',
                'phone'       => config('site.whatsapp', '6281234567806'),
                'is_open'     => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
            [
                'name'        => 'Outlet Rawamangun Hub',
                'city'        => 'jakarta',
                'address'     => 'Jl. Balai Pustaka Timur No. 28, Rawamangun, Pulo Gadung, Jakarta Timur 13220',
                'phone'       => config('site.whatsapp', '6281234567807'),
                'is_open'     => true,
                'created_at'  => now(),
                'updated_at'  => now(),
            ],
        ];

        foreach ($outlets as $outlet) {
            Outlet::updateOrCreate(
                ['name' => $outlet['name']],
                $outlet
            );
        }
    }
}