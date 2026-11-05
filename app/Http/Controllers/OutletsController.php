<?php
namespace App\Http\Controllers;
use App\Models\Outlet;

class OutletsController extends Controller
{
    public function index()
    {
        return view('pages.outlets', [
            'outlets' => Outlet::all()
        ]);
    }
}