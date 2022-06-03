<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Jadpel;

class JadpelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function jadpel()
    {
        $data = Jadpel::all();
        return view('jadpel.card', compact(
            'data'
        ));
    }

    public function kelas_10()
    {
        $data = Jadpel::all();
        return view('jadpel.kelas-10.kelas_10', compact(
            'data'
        ));
    }

    public function kelas_11()
    {
        $data = Jadpel::all();
        return view('jadpel.kelas-11.kelas_11', compact(
            'data'
        ));
    }

    public function kelas_12()
    {
        $data = Jadpel::all();
        return view('jadpel.kelas-12.kelas_12', compact(
            'data'
        ));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_10()
    {
        $data = new Jadpel;
        return view('jadpel.kelas-10.create_10', compact(
            'data'
        ));
    }

    public function create_11()
    {
        $data = new Jadpel;
        return view('jadpel.kelas-11.create_11', compact(
            'data'
        ));
    }

    public function create_12()
    {
        $data = new Jadpel;
        return view('jadpel.kelas.12.create_12', compact(
            'data'
        ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_10(Request $request)
    {
        $data                       = new Jadpel;
        $data->hari                 = $request->hari;
        $data->waktu                = $request->waktu;
        $data->jam                  = $request->jam;
        $data->mapel                = $request->mapel;        
        $data->save();

        return redirect('kelas_10');
    }

    public function store_11(Request $request)
    {
        $data                       = new Jadpel;
        $data->hari                 = $request->hari;
        $data->waktu                = $request->waktu;
        $data->jam                  = $request->jam;
        $data->mapel                = $request->mapel;        
        $data->save();

        return redirect('kelas_11');
    }

    public function store_12(Request $request)
    {
        $data                       = new Jadpel;
        $data->hari                 = $request->hari;
        $data->waktu                = $request->waktu;
        $data->jam                  = $request->jam;
        $data->mapel                = $request->mapel;        
        $data->save();

        return redirect('kelas_12');
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_10($id)
    {
        
        $data = Jadpel::find($id);
        $data->delete();
        return redirect('kelas_10 ');
    }
}
