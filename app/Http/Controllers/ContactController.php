<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ContactController extends Controller
{
    public function index()
    {
        return view('pages.contact');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:100',
            'phone'   => 'required|string|max:20',
            'email'   => 'required|email',
            'topic'   => 'required|string',
            'message' => 'required|string|max:1000',
        ]);

        Log::info('Pesan kontak baru', $data);

        return back()->with('success', 'Terima kasih! Pesan Anda telah terkirim. CS kami akan menghubungi Anda segera.');
    }
}