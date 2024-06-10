<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function tampilkanForm()
    {
        return view('perhitunganForm');
    }

    public function hitung(Request $request)
    {
        $total_belanja = $request->input('total_belanja');
        $diskon = $request->input('diskon') / 100;
        $member_card = $request->input('member_card') == 'ada' ? $total_belanja * 0.10 : 0;
        $potongan_lainnya = $request->input('potongan_lainnya');
        $total_bayar = $total_belanja - ($diskon * $total_belanja) - $member_card - $potongan_lainnya;

        return view('hasilPerhitungan', compact('total_belanja', 'diskon', 'member_card', 'potongan_lainnya', 'total_bayar'));
    }
}
