<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Guru;
use DB; 
use PDF;
                                                                                                        
class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function guru()
    {
        $guru = Guru::all();
        return view('projek-pkl.guru.guru', compact(
            'guru'
        ));
    }
   
    public function print()
    {
    	$guru = Guru::all();
    	$pdf = PDF::loadview('projek-pkl.guru.print', compact(
            'guru'
        ));
        return $pdf->stream();
    	// return $pdf->download('laporan-guru-pdf')['guru'=>$data];
    }

    public function print2($id)
    {
    	$guru = Guru::find($id);
    	$pdf = PDF::loadview('projek-pkl.guru.print2', compact(
            'guru'
        ));
        return $pdf->stream();       
    	// return $pdf->download('laporan-guru-pdf')['guru'=>$data];
    }

    public function search(Request $request)
	{
		// menangkap data pencarian
		$cari = $request->cari;
 
    		// mengambil data dari table pegawai sesuai pencarian data
		$guru = DB::table('guru')
		->where('nama','like',"%".$cari."%")
        ->orWhere('nip','like',"%".$cari."%")
        ->orWhere('kode_guru','like',"%".$cari."%")
		->paginate();
 
    		// mengirim data pegawai ke view index
		return view('projek-pkl.guru.guru',['guru' => $guru]);
 
	}
    
    public function details($id)
    {
        $guru = Guru::find($id);
        return view('projek-pkl.guru.details', compact('guru')
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = new Guru;
        return view('projek-pkl.guru.create', compact(
            'data'
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
        // $data = $request->except(['_token']);
        // Guru::insert($data);
        
        $model                  = new Guru;
        $model->nip             = $request->nip;
        $model->nama            = $request->nama;
        $model->kode_guru       = $request->kode_guru;
        $model->tempat_lahir    = $request->tempat_lahir;
        $model->tanggal_lahir   = $request->tanggal_lahir;
        $model->jk              = $request->jk;
        $model->alamat          = $request->alamat;
        $model->honor_perjam    = $request->honor_perjam;
        $model->save();

        return redirect('guru')->with('toast_success', 'Successfully Add Teacher Data  !');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('guru.edit', compact('guru'));
        // $data = Guru::findOrfail($id);
        // return view('guru.show')->with([
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
        $data = Guru::find($id);
        return view('projek-pkl.guru.edit', compact('data')
        );
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
        $data                   = Guru::find($id);
        $data->nip              = $request->nip;
        $data->nama             = $request->nama;
        $data->kode_guru        = $request->kode_guru;
        $data->tempat_lahir     = $request->tempat_lahir;
        $data->tanggal_lahir    = $request->tanggal_lahir;
        $data->jk               = $request->jk;
        $data->alamat           = $request->alamat;
        $data->honor_perjam     = $request->honor_perjam;
        $data->update();

        return redirect('guru')->with('toast_success', 'Successfully Edit Teacher Data  !');

        // $request->validate([]);
        // $guru->update($request->all());
        // $item = Guru::findOrFaill($id);
        // $data = $request->except(['_token']);
        // $item->update($data);
        // return redirect('guru');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // DB::table('guru')->where('id', $id)->delete();
        // return redirect('guru')->with('status'. 'The teacher has been removed');

        $data = Guru::find($id);
        $data->delete();
        return redirect('guru');

        // $item = Guru::findOrFile($id);
        // $item->delete();
        // return redirect('guru');

        // $guru->delete();
        // return redirect()->route('guru.guru')->with('Success', 'The teacher has been removed');
    }
}
