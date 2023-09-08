<?php

namespace App\Http\Controllers;

use App\Models\cast;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;
use App\Models\film;
use App\Models\peran;
use RealRashid\SweetAlert\Facades\Alert;

class PeranController extends Controller
{
    public function index()
    {
        $peran = new Peran;

        
        $peran = Peran::all();
        $film1 = Film::all();
        $cast1 = Cast::all();
        return view('peran.index',compact('peran'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $peran = new Peran;
        $film1 = new Film;
        $cast1 = new Cast;

        $peran = Peran::all();
        $film = Film::all();
        $cast = Cast::all();
        return view('peran.create', compact('peran'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $film1 = Film::all();
        $cast1 = Cast::all();
        $peran = new Peran;


        $request->validate([
            'film' => 'required',
            'cast' => 'required',
            'nama' => 'required',
        ]);

        $peran->film_id = $request->film;
        $peran->cast_id = $request->cast;
        $peran->nama = $request->nama;

        $simpan = $peran->save();

        
        if($simpan){
            Alert::success('success', 'data bergasil ditambah');
            redirect('/peran');
        }else{
            Alert::error('Failed', 'Gagal menyimpan data');
        }
        
        return redirect('/peran');
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


        $film1 = Film::all();
        $cast1 = Cast::all();
        $peran = Peran::where('id',$id)->first();

        return view('peran.edit', compact('peran'));
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

        $film1 = Film::all();
        $cast1 = Cast::all();

        $peran = new Peran;

        $request->validate([
            'film' => 'required',
            'cast' => 'required',
            'nama' => 'required',
        ]);

        $peran = Peran::find($id);

        $peran->film_id = $request->film;
        $peran->cast_id = $request->cast;
        $peran->nama = $request->nama;


        $ubah = $peran->save();

        if($ubah){
            Alert::success('success', 'data bergasil di ubah');
            redirect('/peran');
        }else{
            Alert::error('Failed', 'Gagal menyimpan data');
        }
        
        return redirect('/peran');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $peran = Peran::find($id);
        $hapus= $peran ->delete();


        Alert::success('success', 'data bergasil di hapus');

        return redirect('/peran');
    }
}
