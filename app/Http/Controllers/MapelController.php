<?php

namespace App\Http\Controllers;

use App\Models\Mapel;
use Illuminate\Http\Request;
use DB;

class MapelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function mapel()
    {
        $mapel = Mapel::all();
        return view('projek-pkl.mapel.mapel', compact(
            'mapel'
        ));
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$mapel = DB::table('Mapel')
		->where('kode_mapel','like',"%".$cari."%")
        ->orWhere('nama_mapel', 'like', '%'.$cari."%")
        ->orWhere('guru', 'like', '%'.$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('projek-pkl.mapel.mapel',['mapel' => $mapel]);
 
	}
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $mapel = new Mapel;
        return view('projek-pkl.mapel.create', compact (
            'mapel'
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
        $mapel                  = new Mapel;
        $mapel->kode_mapel      = $request->kode_mapel;
        $mapel->nama_mapel      = $request->nama_mapel;
        $mapel->guru            = $request->guru; 
        $mapel->save();

        return redirect('mapel')->with('toast_success', 'Successfully Add Data  !');
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
        $mapel = Mapel::find($id);
        return view('projek-pkl.mapel.edit', compact(
            'mapel'
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
        $mapel                  = Mapel::find($id);
        $mapel->kode_mapel      = $request->kode_mapel;
        $mapel->nama_mapel      = $request->nama_mapel;
        $mapel->guru            = $request->guru; 
        $mapel->update();

        return redirect('mapel')->with('toast_success', 'Successfully Edit Data !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mapel = Mapel::find($id);
        $mapel->delete();
        return redirect('mapel')->with('toast_success', 'Successfully Delete Data !');
    }
}
