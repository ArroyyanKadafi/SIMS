<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Siswa;
use DB;
use PDF;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function siswa()
    {
        $siswa = Siswa::all();
        return view('projek-pkl.siswa.siswa', compact (
            'siswa'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $siswa = new Siswa;
        return view('projek-pkl.siswa.create', compact (
            'siswa'
        ));
    }

    public function print()
    {
    	$siswa = Siswa::all();
    	$pdf = PDF::loadview('projek-pkl.siswa.print', compact(
            'siswa'
        ));
        return $pdf->stream();
    	// return $pdf->download('laporan-guru-pdf')['guru'=>$data];
    }

    public function print2($id)
    {
    	$siswa = Siswa::find($id);
    	$pdf = PDF::loadview('projek-pkl.siswa.print2', compact(
            'siswa'
        ));
        return $pdf->stream();       
    	// return $pdf->download('laporan-guru-pdf')['guru'=>$data];
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$siswa = DB::table('siswa')
		->where('nama','like',"%".$cari."%")
        ->Orwhere('nis','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('projek-pkl.siswa.siswa',['siswa' => $siswa]);
 
	}

    public function details($id)
    {
        $siswa = Siswa::find($id);
        return view('projek-pkl.siswa.details', compact('siswa')
        );
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data                  = new Siswa;
        $data->nis             = $request->nis;
        $data->nama            = $request->nama;
        $data->tempat_lahir    = $request->tempat_lahir; 
        $data->tanggal_lahir   = $request->tanggal_lahir; 
        $data->jk              = $request->jk; 
        $data->agama           = $request->agama;
        $data->gol_dar         = $request->gol_dar;
        $data->kelas           = $request->kelas;
        $data->jurusan         = $request->jurusan;
        $data->no_telp         = $request->no_telp;
        $data->alamat          = $request->alamat;
        $data->save();

        return redirect('siswa')->with('toast_success', 'Successfully Add Student Data  !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $data = Siswa::findOrfail($id);
        // return view('Siswa.show')->with([
        //     'data' => $data
        // ]); 
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Siswa::find($id);
        return view('projek-pkl.siswa.edit', compact(
            'data'
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
        $data                  = Siswa::find($id);
        $data->nis             = $request->nis;
        $data->nama            = $request->nama;
        $data->tempat_lahir    = $request->tempat_lahir; 
        $data->tanggal_lahir   = $request->tanggal_lahir; 
        $data->jk              = $request->jk; 
        $data->agama           = $request->agama;
        $data->gol_dar         = $request->gol_dar;
        $data->kelas           = $request->kelas;
        $data->jurusan         = $request->jurusan;
        $data->no_telp         = $request->no_telp;
        $data->alamat          = $request->alamat;
        $data->update();

        return redirect('siswa')->with('toast_success', 'Successfully Edit Student Data !');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Siswa::find($id);
        $data->delete();
        return redirect('siswa');
    }
}
