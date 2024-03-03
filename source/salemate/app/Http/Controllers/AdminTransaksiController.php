<?php

namespace App\Http\Controllers;

use App\Models\Pelanggan;
use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Produk;
use App\Models\transaksiDetail;
use Carbon\Carbon;

class AdminTransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            'title'     => 'Riwayat transaksi',
            'transaksi' => Transaksi::orderBy('created_at', 'DESC')->paginate(10),
            'content'   => 'transaksi/index'
        ];
        return view('layouts.wrapper', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $id_transaksi =  request('id');
        $transaksi = Transaksi::find($id_transaksi);
        $detail_transaksi = TransaksiDetail::where('id_transaksi', $id_transaksi)->get();
        $id_pelanggan = request('id');
        $pelanggan = Pelanggan::find($id_pelanggan);
        $pelanggan_list = Pelanggan::all();
        $produk = Produk::where('stok', '>', 0)->get();
        $produk_id = request('produk_id');
        $detail_produk = Produk::find($produk_id);

        $data = [
            'content' => 'transaksi/create',
            'transaksi' => $transaksi,
            'title'     => 'Tambah transaksi',
            'produk'    => $produk,
            'detail_produk'  => $detail_produk,
            'detail_transaksi'  => $detail_transaksi,
            'pelanggan' => $pelanggan,
            'pelanggan_list' => $pelanggan_list,
        ];
        return view('layouts.wrapper', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id_transaksi =  request('id');
        $transaksi = Transaksi::find($id_transaksi);
        $data = [
            'total'     => $request->total,
            'dibayarkan' => $request->dibayarkan,
            'kembalian' => $request->kembalian,
            'status' => 'selesai',
        ];
        $transaksi->update($data);

        return response()->json(['success' => true]);
    }

    public function laporanPenjualan()
    {
        $transaksi = Transaksi::get();
        $data = [
            'title' => 'Laporan Transaksi',
            'content' => 'transaksi.laporan',
            'transaksi' => $transaksi
        ];

        return view('layouts.wrapper', $data);
    }

    public function generateLaporan()
    {
        $transaksi = Transaksi::get();
        $timestamp = Carbon::now()->format('Ymd');
        $filename = 'laporan_transaksi_' . $timestamp . '.pdf';

        $pdf = app('dompdf.wrapper')->loadView('transaksi.laporan', [
            'title' => 'Laporan Transaksi',
            'transaksi' => $transaksi
        ]);

        return $pdf->download($filename);
    }
}
