<?php

namespace App\Http\Controllers;

use App\Models\Perjalanan;
use App\Models\User;
use Illuminate\Http\Request;

class PerjalananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->role=='Admin'){
            $data=[
                'title'=>'Catatan Perjalanan',
                'perjalanans'=> Perjalanan::orderBy('created_at','desc')->get(),
            ];
        } else {
            $data=[
                'title'=>'Catatan Perjalanan',
                'perjalanans'=> Perjalanan::where('user_id', auth()->user()->id)->orderBy('created_at','desc')->get(),
                // 'route'=>route('User.create'),

            ];
        }
        return view('admin.perjalanan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'form_title'=>'Tambah Data Perjalanan',
            'method'=>'POST',
            'users' => User::all(),
            // 'route'=>route('user.store')
        ];
        return view('admin.perjalanan.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = $request->validate([

            'namalokasi'=>'required',
            'alamatlokasi'=>'required',
            'suhutubuh'=>'required',

        ]);
        $Perjalanan = new Perjalanan();
        $user_id = auth()->user()->id;
        $Perjalanan->user_id = $user_id;
        $Perjalanan->namalokasi = $request->namalokasi;
        $Perjalanan->alamatlokasi = $request->alamatlokasi ;
        $Perjalanan->suhutubuh = $request->suhutubuh;
        //dd($User_id);
        $Perjalanan->save();

        return redirect() -> route('perjalanan-index')->with('message','perjalanan berhasil dibuat');
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
            'form_title' => 'Edit Perjalanan',
            'method' => 'PUT',
            'route' => route('perjalanan-update', $id),
            'perjalanan' => Perjalanan::where('id',$id)->first(),
        ];
        return view('admin.perjalanan.edit', $data);
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
        $Perjalanan = Perjalanan::find($id);
        $Perjalanan->namalokasi = $request->namalokasi;
        $Perjalanan->alamatlokasi = $request->alamatlokasi ;
        $Perjalanan->suhutubuh = $request->suhutubuh;
        //dd($validate);
        $Perjalanan->save();


        $Perjalanan->update();
        return redirect()->route('perjalanan-index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = Perjalanan::where('id', $id);
        $destroy->delete();
        return redirect()->route('perjalanan-index');
    }
}
