<?php

namespace App\Http\Controllers;

use App\Models\Penonton;
use App\Models\Transaksi;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $data = Transaksi::join('penontons', 'penontons.id_cek', '=', 'transaksis.id_penonton')
            ->get(['*', 'transaksis.created_at as created']);

        return view('admin.dashboard', [
            'transaksi' => $data
        ]);
    }
    public function destroy(Request $request)
    {
        $datax = Transaksi::findOrFail($request->id_trans);
        $datax->delete();
        return redirect('/dashboard')->with('success', 'Transaksi Berhasil Dihapus');
    }

    public function edit($id)
    {


        $penonton = Penonton::select('*')
            ->where('id_cek', '=', $id)
            ->get();


        return view('admin.edit', [
            'penonton' => $penonton
        ]);
    }

    public function editdatapemesanan(Request $request)
    {
        echo "sini";
        $validateData = $request->validate([
            'id' => 'required',
            'nama' => 'required|max:255',
            'jenis_kelamin' => 'required',
            'phone' => 'required',
            'created_at' => 'required',

        ]);

        // print_r($validateData);

        Penonton::where('id', $request->id)->update($validateData);
        return redirect('/dashboard')->with('success', 'Transaksi Berhasil Dihapus');
    }

    public function cekstatus(Request $request)
    {
        // echo $request->cek;

        $data = Transaksi::join('penontons', 'penontons.id_cek', '=', 'transaksis.id_penonton')
            ->where('id_cek', '=', $request->cek)
            ->get(['*', 'transaksis.created_at as created']);

        Transaksi::where('id_penonton', $request->cek)->update([
            'sts_cek'     => 1
        ]);

        return view('admin.cekstatus', [
            'data' => $data
        ]);
    }
    // public function cekdata(Request $request)
    // {
    //     $data = Transaksi::join('penontons', 'penontons.id_cek', '=', 'transaksis.id_penonton')
    //         ->where('id_cek', '=', '647ee0ddaf1c2')
    //         ->get(['*', 'transaksis.created_at as created']);

    //     // Transaksi::where('id', $request->id)->update($validateData);

    //     return view('admin.cekstatus', [
    //         'data' => $data
    //     ]);
    // }
}
