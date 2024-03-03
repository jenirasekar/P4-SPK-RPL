<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;
use App\Models\TransaksiDetail;
use App\Models\Transaksi;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AdminTransaksiDetailController extends Controller
{
    public function store(Request $request)
    {
        $id_produk = $request->id_produk;
        $id_transaksi = $request->id;

        $transaksi = Transaksi::find($id_transaksi);
        dd($transaksi);

        if ($transaksi == null) {
            $transaksi = Transaksi::where('status', 'pending')->first();
            $transaksi = Transaksi::create([
                'id_user' => auth()->user()->id,
                'total' => 0,
                'dibayarkan' => 0,
                'kembalian' => 0,
                'nama_kasir' => auth()->user()->name,
                'status' => 'pending',
                'id_pelanggan' => $request->id_pelanggan
            ]);
        }

        $detail_transaksi = TransaksiDetail::where('id_produk', $id_produk)
            ->where('id_transaksi', $transaksi->id)
            ->first();

        $produk = Produk::find($id_produk);
        $reqQty = $request->qty;
        $new_stok = $produk->stok - $reqQty;
        if ($new_stok < 0) {
            $new_stok = 0;
            $reqQty = $produk->stok;
        }

        if ($detail_transaksi == null) {
            $produk = Produk::where('stok', '>', 0)->find($id_produk);
            $data = [
                'id_produk' => $id_produk,
                'nama_produk' => $produk->nama_produk,
                'id_transaksi'  => $transaksi->id,
                'qty'  => $reqQty,
                'subtotal'  => $request->subtotal,
            ];
            $detail_transaksi = TransaksiDetail::create($data);
        } else {
            $data = [
                'qty'  => $detail_transaksi->qty + $reqQty,
                'subtotal'  => $request->subtotal + $detail_transaksi->subtotal,
            ];
            $detail_transaksi->update($data);
        }

        $produk = Produk::find($id_produk);
        if ($produk != null) {
            $old_stok = $produk->stok;
            $produk->update([
                'stok' => $old_stok - $reqQty
            ]);
        } else {
            throw new \Exception('Produk tidak ditemukan.');
        }

        return response()->json($detail_transaksi);
    }

    public function pendingTransaksi(Request $request)
    {
        $id_pelanggan = $request->id_pelanggan;
        $data = [
            'details' => [],
            'id_transaksi' => null,
            'total' => 0
        ];
        if ($id_pelanggan != null) {
            $transaksi = Transaksi::where('status', 'pending')
                ->where('id_pelanggan', $id_pelanggan)
                ->first();
            $details = TransaksiDetail::where('id_transaksi', $transaksi->id)->get();
            $total = TransaksiDetail::where('id_transaksi', $transaksi->id)->sum('subtotal');
        }
        $data = [
            'details' => $details,
            'id_transaksi' => $transaksi->id,
            'total' => $total
        ];

        return response()->json($data);
    }

    public function delete()
    {
        $id = request('id');
        $detail_transaksi = TransaksiDetail::find($id);

        if ($detail_transaksi) {
            $transaksi = Transaksi::find($detail_transaksi->id_transaksi);

            if ($transaksi) {
                $data = [
                    'total' => $transaksi->total - $detail_transaksi->subtotal,
                ];
                $transaksi->update($data);
            }

            $produk = Produk::find($detail_transaksi->id_produk);
            // ngambil stok lama
            $old_stok = $produk->stok;
            // kalkulasi stok
            $produk->update([
                // change it to addition
                'stok' => $old_stok + $detail_transaksi->qty
            ]);

            $detail_transaksi->delete();

            return response()->json(['success' => 'Record telah dihapus']);
        } else {
            return response()->json(['error' => 'Record tidak ditemukan'], 404);
        }
    }

    public function cetakStruk(Request $request)
    {
        $id_transaksi = $request->id;
        $transaksi = Transaksi::find($id_transaksi);
        $data_struk = DB::table('transaksi')
            ->join('detail_transaksi', 'detail_transaksi.id_transaksi', '=', 'transaksi.id')
            ->join('produk', 'produk.id', '=', 'detail_transaksi.id_produk')
            ->leftJoin('pelanggan', 'pelanggan.id', '=', 'transaksi.id_pelanggan')
            ->select(
                'transaksi.id as id_transaksi',
                'transaksi.nama_kasir',
                'transaksi.total',
                'transaksi.dibayarkan',
                'transaksi.kembalian',
                'transaksi.created_at',
                'detail_transaksi.nama_produk',
                'detail_transaksi.qty',
                'detail_transaksi.subtotal',
                'produk.harga as harga_produk',
                'pelanggan.nama_pelanggan',
                DB::raw('detail_transaksi.qty * produk.harga as subtotal_produk')
            )->where('transaksi.id', $id_transaksi)
            ->get();
        $timestamp = Carbon::now()->format('YmdHis');
        $filename = 'struk_' . $timestamp . '.pdf';

        $pdf = app('dompdf.wrapper')->loadView('transaksi.struk', [
            'data_struk' => $data_struk,
            'transaksi' => $transaksi
        ]);

        return $pdf->download($filename);
    }
}
