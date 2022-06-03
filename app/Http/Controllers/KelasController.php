<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kelas;
use DB;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function kelas()
    {
        $kelas = Kelas::all();
        return view('projek-pkl.kelas.kelas', compact(
            'kelas'
        ));

    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$kelas = DB::table('kelas')
		->where('kode_kelas','like',"%".$cari."%")
        ->orWhere('nama_kelas', 'like', '%'.$cari."%")
        ->orWhere('wali_kelas', 'like', '%'.$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('projek-pkl.kelas.kelas',['kelas' => $kelas]);
	}
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kelas = new Kelas;
        return view('projek-pkl.kelas.create', compact(
            'kelas'
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
        $kelas                  = new Kelas;
        $kelas->kode_kelas      = $request->kode_kelas;
        $kelas->nama_kelas      = $request->nama_kelas;
        $kelas->wali_kelas      = $request->wali_kelas;
        $kelas->spp             = $request->spp;
        $kelas->save();

        return redirect('kelas')->with('toast_success', 'Successfully Add Data  !');
        // ->with('toast_success', 'Teacher was successfully added')
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
        $kelas = Kelas::find($id);
        return view('projek-pkl.kelas.edit', compact(
            'kelas'
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
        $kelas                  = Kelas::find($id);
        $kelas->kode_kelas      = $request->kode_kelas;
        $kelas->nama_kelas      = $request->nama_kelas;
        $kelas->wali_kelas      = $request->wali_kelas;
        $kelas->spp             = $request->spp;
        $kelas->update();

        return redirect('kelas')->with('toast_success', 'Successfully Edit Data !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kelas = Kelas::find($id);
        $kelas->delete();
        return redirect('kelas')->with('toast_success', 'Successfully Delete Data !');
    }
}
