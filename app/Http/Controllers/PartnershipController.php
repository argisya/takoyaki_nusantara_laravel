<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartnershipController extends Controller
{
    public function index()
    {
        return view('pages.partnership');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:100',
            'phone'   => 'required|string|max:20',
            'email'   => 'nullable|email',
            'city'    => 'required|string|max:100',
            'budget'  => 'required|string',
            'message' => 'nullable|string',
        ]);

        // TODO: simpan ke DB atau kirim notifikasi WA/email
        // Partnership::create($data);

        return back()->with('success', 'Terima kasih! Tim kami akan menghubungi Anda segera.');
    }
}