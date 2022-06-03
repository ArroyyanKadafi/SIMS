<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jurusan;
use DB;
// use Illuminate\Queue\Jobs\RedisJob;

class JurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jurusan()
    {
        $jurusan = Jurusan::all();
        return view('projek-pkl.jurusan.jurusan', compact(
            'jurusan'
        ));
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$jurusan = DB::table('jurusan')
		->where('nama_jurusan', 'like',"%".$cari."%")
        ->orWhere('kode_jurusan', 'like', '%'.$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('projek-pkl.jurusan.jurusan',['jurusan' => $jurusan]);
 
	}

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $jurusan = new Jurusan;
        return view('projek-pkl.jurusan.create', compact(
            'jurusan'
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
        $jurusan                  = new Jurusan;
        $jurusan->kode_jurusan    = $request->kode_jurusan;
        $jurusan->nama_jurusan    = $request->nama_jurusan;
        $jurusan->save();

        return redirect('jurusan')->with('toast_success', 'Successfully Add Data  !');
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
        $jurusan = Jurusan::find($id);
        return view('projek-pkl.jurusan.edit', compact(
            'jurusan'
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
        $jurusan                  = Jurusan::find($id);
        $jurusan->kode_jurusan    = $request->kode_jurusan;
        $jurusan->nama_jurusan    = $request->nama_jurusan;
        $jurusan->update();

        return redirect('jurusan')->with('toast_success', 'Successfully Edit Data !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $jurusan = Jurusan::find($id);
        $jurusan->delete();
        return redirect('jurusan')->with('toast_success', 'Successfully Delete Data !');
    }
}
