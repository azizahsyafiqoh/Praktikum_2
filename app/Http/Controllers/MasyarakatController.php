<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;

class MasyarakatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'title'=>'Masyarakat List',
            'masyarakats'=> Masyarakat::all(),
            // 'route'=>route('masyarakat.create'),

        ];
        return view('admin.masyarakat.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'form_title'=>'Add New Masyarakat',
            'method'=>'POST',
            // 'route'=>route('masyarakat.store')
        ];
        return view('admin.masyarakat.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Masyarakat = new Masyarakat();
        $Masyarakat->nik = $request->nik;
        $Masyarakat->alamat = $request->alamat;
        $Masyarakat->gmail = $request->gmail;
        $Masyarakat->nama = $request->nama;
        $Masyarakat->tanggallahir = $request->tanggallahir;
        $Masyarakat->telepon = $request->telepon;



        $Masyarakat->save();
        // return view('admin.masyarakat.index');
        return redirect() -> route('masyarakat-index');
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
        $data = [
            'form_title' => 'Edit Masyarakat',
            'method' => 'PUT',
            'route' => route('masyarakat-update', $id),
            'masyarakat' => Masyarakat::where('id',$id)->first(),
        ];
        return view('admin.masyarakat.edit', $data);
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
        $Masyarakat=Masyarakat::find($id);
        $Masyarakat->nik = $request->nik;
        $Masyarakat->alamat = $request->alamat;
        $Masyarakat->gmail = $request->gmail;
        $Masyarakat->nama = $request->nama;
        $Masyarakat->tanggallahir = $request->tanggallahir;
        $Masyarakat->telepon = $request->telepon;



        $Masyarakat->update();
        return redirect()->route('masyarakat-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Masyarakat::where('id', $id);
        $destroy->delete();
        return redirect()->route('masyarakat-index');
    }
}
