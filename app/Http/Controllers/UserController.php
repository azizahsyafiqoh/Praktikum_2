<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=[
            'title'=>'Data Petugas',
            'users'=> User::where('role','Admin')->get(),
            // 'route'=>route('User.create'),

        ];
        //dd($data);
        return view('admin.user.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=[
            'form_title'=>'Tambah Data Petugas',
            'method'=>'POST',
            // 'route'=>route('user.store')
        ];
        return view('admin.user.create', $data);
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
            'nik'=> 'required|min:16',
            'name'=>'required',
            'email'=>'required',
            'password'=>'required',

        ]);
        $User = new User();
        $User->nik = $request->nik;
        $User->name = $request->name;
        $User->email = $request->email;
        $User->password = bcrypt($request->password) ;
        $User->role = 'Admin';
        //dd($validate);
        $User->save();

        return redirect() -> route('user-index')->with('message','picture berhasil dibuat');
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
            'form_title' => 'Edit User',
            'method' => 'PUT',
            'route' => route('user-update', $id),
            'pengguna' => User::where('id',$id)->first(),
        ];
        return view('admin.user.edit', $data);
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
        $User=User::find($id);
        $User->nik = $request->nik;
        $User->name = $request->name;
        $User->gender = $request->gender;
        $User->dob = $request->dob;
        $User->address = $request->address;
        $User->phone = $request->phone;
        $User->photo = $request->photo;
        $User->email = $request->email;






        $User->update();
        return redirect()->route('user-index');
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
        return redirect()->route('user-index');
    }
}
