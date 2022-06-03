<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gaji;
use PDF;
use DB;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function penggajian()
    {
        $gaji = Gaji::all();
        return view('projek-pkl.gaji.gaji', compact(
            'gaji'
        ));
    }

    public function print($id)
    {
    	$gaji = Gaji::find($id);
    	$pdf = PDF::loadview('projek-pkl.gaji.print', compact(
            'gaji'
        ));
        return $pdf->stream();
    	// return $pdf->download('laporan-guru-pdf')['guru'=>$data];
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$gaji = DB::table('gaji')
		->where('nip', 'like',"%".$cari."%")
        ->orWhere('nama', 'like', '%'.$cari."%")
        ->orWhere('bulan', 'like', '%'.$cari."%")
        ->orWhere('tanggal', 'like', '%'.$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('projek-pkl.gaji.gaji',['gaji' => $gaji]);
 
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
        $gaji = new Gaji;
        return view('projek-pkl.gaji.create', compact(
            'gaji'
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
        $gaji                  = new Gaji;
        $gaji->nip             = $request->nip;
        $gaji->nama            = $request->nama;
        $gaji->bulan           = $request->bulan;
        $gaji->tanggal         = $request->tanggal;
        $gaji->penerimaan      = $request->penerimaan;
        $gaji->potongan        = $request->potongan;
        $gaji->honor_perjam    = $request->honor_perjam;
        $gaji->total_jam       = $request->total_jam;
        $gaji->bayar           = $request->bayar;
        $gaji->save();

        return redirect('penggajian')->with('toast_success', 'Successfully Add Payments  !');
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
        $gaji = Gaji::find($id);
        return view('projek-pkl.gaji.edit', compact(
            'gaji'
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
        $gaji                  = Gaji::find($id);
        $gaji->nip             = $request->nip;
        $gaji->nama            = $request->nama;
        $gaji->bulan           = $request->bulan;
        $gaji->tanggal         = $request->tanggal;
        $gaji->penerimaan      = $request->penerimaan;
        $gaji->potongan        = $request->potongan;
        $gaji->honor_perjam    = $request->honor_perjam;
        $gaji->total_jam       = $request->total_jam;
        $gaji->bayar           = $request->bayar;
        $gaji->update();

        return redirect('penggajian')->with('toast_success', 'Successfully Edit Payments !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gaji = Gaji::find($id);
        $gaji->delete();
        return redirect('penggajian')->with('toast_success', 'Successfully Delete Payments !');
    }
}
