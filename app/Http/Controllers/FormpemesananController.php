<?php

namespace App\Http\Controllers;

use App\Models\formpemesanan;
use Illuminate\Http\Request;

class FormpemesananController extends Controller
{
    public function index(){
        $data = formpemesanan::all();
        return view('tamu.pemesanan',compact('data'));
    }

    public function tambah()
    {
        return view('tamu.pemesanan');
    }

    public function simpan(Request $request)
    {

        $this->validate($request,[
            'namapemesan' => 'required',
            'email' => 'required',
            'notelp' => 'required',
            'namatamu' => 'required',
            'tipekamar' => 'required',
            'tglcekin' => 'required',
            'tglcekout' => 'required',
            'jmlkamar' => 'required',
        ]);
        formpemesanan::create([
            'namapemesan' => $request->namapemesan,
            'email' => $request->email,
            'notelp' => $request->notelp,
            'namatamu' => $request->namatamu,
            'tipekamar' => $request->tipekamar,
            'tglcekin' => $request->tglcekin,
            'tglcekout' => $request->tglcekout,
            'jmlkamar' => $request->jmlkamar,

        ]);

        return Redirect('/tampil');
    }


    public function destroy($id)
    {
        $data=formpemesanan::findorfail($id);
        $data->delete();
        return back()->with('destroy','data berhasil dihapus');
    }
}
