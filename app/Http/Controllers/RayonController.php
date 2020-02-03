<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Siswa;
use App\Guru;
use App\Rayon;


class RayonController extends Controller
{
    public function  index()
    {
        $siswa=Siswa::all();
        $data_rayons=Rayon::all();
        return view ('rayon.index',['data_rayons' =>$data_rayons],compact('siswa'));
    }
public function create(Request $request)
{
  \App\Rayon::create($request->all());
  return redirect('/rayon')->with('Sukses','Data Berhasil Terinput');
 
}
public function edit($id)
{
  $data_rayons=\App\Rayon::find($id);
 return view('rayon/edit',['rayon' => $data_rayons]);
}
public function update(Request $request,$id)
{
  $data_rayons=\App\Rayon::find($id);
  $data_rayons->update($request ->all());
  return redirect ('/rayon')->with('Sukses,Data Berhasil Terupdate');
}
public function delete($id)
{
  $data_rayons=\App\Rayon::find($id);
  $data_rayons->delete($data_rayons);
  return redirect('/rayon')->with('Sukses','Data Berhasil Terhapus');
}
}
