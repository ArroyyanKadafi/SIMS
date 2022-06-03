<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Spp;
use PDF;
use DB;

class SppController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function spp()
    {
        $spp = Spp::all();
        return view('projek-pkl.spp.spp', compact(
            'spp'
        ));
    }

    public function print($id)
    {
    	$spp = Spp::find($id);
    	$pdf = PDF::loadview('projek-pkl.spp.print', compact(
            'spp'
        ));
        return $pdf->stream();
    	// return $pdf->download('laporan-guru-pdf')['guru'=>$data];
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$spp = DB::table('Spp')
		->where('nis','like',"%".$cari."%")
        ->orWhere('nama', 'like', '%'.$cari."%")
        ->orWhere('tanggal', 'like', '%'.$cari."%")
        ->orWhere('bulan', 'like', '%'.$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('projek-pkl.spp.spp',['spp' => $spp]);
 
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $spp = new Spp;
        return view('projek-pkl.spp.create', compact (
            'spp'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $spp                  = new Spp;
        $spp->nis             = $request->nis;
        $spp->nama            = $request->nama;
        $spp->tanggal         = $request->tanggal; 
        $spp->bulan           = $request->bulan;         
        $spp->kelas           = $request->kelas;
        $spp->jurusan         = $request->jurusan;  
        $spp->jumlah          = $request->jumlah;      
        $spp->save();

        return redirect('spp')->with('toast_success', 'Successfully Add Payments  !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $spp = Spp::find($id);
        return view('projek-pkl.spp.edit', compact(
            'spp'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $spp                  = new Spp;
        $spp->nis             = $request->nis;
        $spp->nama            = $request->nama;
        $spp->tanggal         = $request->tanggal; 
        $spp->bulan           = $request->bulan;         
        $spp->kelas           = $request->kelas;
        $spp->jurusan         = $request->jurusan;  
        $spp->jumlah          = $request->jumlah;      
        $spp->update();

        return redirect('spp')->with('toast_success', 'Successfully Edit Payments !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $spp = Spp::find($id);
        $spp->delete();
        return redirect('spp')->with('toast_success', 'Successfully Delete Payments !');
    }
}
