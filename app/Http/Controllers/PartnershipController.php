<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PartnershipController extends Controller
{
    public function index()
    {
        return view('pages.partnership');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'     => 'required|string|max:100',
            'phone'    => 'required|string|max:20',
            'city'     => 'required|string|max:100',
            'package'  => 'required|string',
            'location' => 'nullable|string|max:500',
        ]);

        // TODO: simpan ke DB (Partnership::create($data)) atau kirim notifikasi
        Log::info('Pendaftaran kemitraan baru', $data);

        // Format pesan WhatsApp
        $message = "Halo CS *Takoyaki Nusantara*, saya berminat mendaftar kemitraan:\n\n"
            . "👤 Nama: {$data['name']}\n"
            . "📱 WhatsApp: {$data['phone']}\n"
            . "📍 Kota: {$data['city']}\n"
            . "📦 Paket: {$data['package']}\n"
            . "🗺️ Rencana Lokasi: " . ($data['location'] ?? '-');

        $waUrl = 'https://wa.me/' . config('site.whatsapp') . '?text=' . urlencode($message);

        return redirect()->away($waUrl);
    }
}