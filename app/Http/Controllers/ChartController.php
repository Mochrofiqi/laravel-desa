<?php

namespace App\Http\Controllers;

use App\Models\Ktp;
use App\Models\Dusun;
use App\Models\Bantuan;
use App\Models\Kematian;
use App\Models\Penduduk;
use App\Models\Perangkat;
use App\Models\JenisBantuan;
use Illuminate\Http\Request;

class ChartController extends Controller
{
    public function index()
    {

        return view('utama.chart', [
            'title' => 'Chart',
            'penduduk_count' => Penduduk::all()->count(),
            'perangkat_count' => Perangkat::all()->count(),
            'dusun_count' => Dusun::all()->count(),
            'bantuan_count' => Bantuan::all()->count(),
            'jenis_bantuan_count' => JenisBantuan::all()->count(),
            'ktp_count' => Ktp::all()->count(),
            'kematian_count' => Kematian::all()->count()

        ]);
    }
}
