<?php

namespace App\Http\Controllers;

use App\Models\User;
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
            'title'=>'Data Pengguna',
            'masyarakats'=> User::where('role', 'user')->orderby('created_at','desc')->get(),
            // 'route'=>route('masyarakat.create'),


        ];
        //dd($data);
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
            'form_title'=>'Tambah Data Masyarakat',
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
        $masyarakat = new User();
        $masyarakat->nik = $request->nik;
        $masyarakat->address = $request->address;
        $masyarakat->email = $request->email;
        $masyarakat->name = $request->name;
        $masyarakat->dob = $request->dob;
        $masyarakat->phone = $request->phone;
        $masyarakat->save();
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
            'masyarakat' => User::where('id',$id)->first(),
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
        $masyarakat=User::find($id);
        $masyarakat->nik = $request->nik;
        $masyarakat->address = $request->address;
        $masyarakat->email = $request->email;
        $masyarakat->name = $request->name;
        $masyarakat->dob = $request->dob;
        $masyarakat->phone = $request->phone;



        $masyarakat->update();
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
        $destroy = User::where('id', $id);
        $destroy->delete();
        return redirect()->route('masyarakat-index');
    }
}
