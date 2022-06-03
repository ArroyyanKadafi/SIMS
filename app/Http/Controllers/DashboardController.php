<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DashboardController extends Controller
{
    public function dashboard() 
    {   
        $guru               = DB::table('guru')->count();
        $siswa              = DB::table('siswa')->count();
        $jurusan            = DB::table('jurusan')->count();
        $kelas              = DB::table('kelas')->count();       
        return view('projek-pkl.dashboard', compact(
            'guru', 'siswa', 'jurusan', 'kelas'
        ));
        
    }

    // public function search(Request $request)
	// {
		// menangkap data pencarian
		// $cari = $request->cari;
 
    // 		// mengambil data dari table pegawai sesuai pencarian data
		// $guru               = DB::table('guru')
        // ->where('nama','like',"%".$cari."%")
        // ->paginate();

        // $siswa              = DB::table('siswa')
        // ->where('nama','like',"%".$cari."%")
        // ->paginate();

        // $jurusan            = DB::table('jurusan')
        // ->where('nama_jurusan','like',"%".$cari."%")
		// ->paginate();

        // $kelas              = DB::table('kelas')   
		// ->where('nama_kelas','like',"%".$cari."%")
		// ->paginate();
        // ->orWhere('body', 'like', '%'.$cari."%")
 
    // 		// mengirim data pegawai ke view index
		// return view('dashboard', [
        //         'guru' => $guru, 
        //         'siswa' => $siswa, 
        //         'jurusan' => $jurusan, 
        //         'kelas' => $kelas            
        //      ]);
 
	// }
    // public function __construct()
    // {
    //     $this->middleware(['auth','verified']);
    // }
    
    // $this->middleware('auth');
    
}