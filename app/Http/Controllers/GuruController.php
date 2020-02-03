<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuruController extends Controller
{
    public function  index()
  {
      $data_gurus=\App\Guru::all();
      return view ('guru.index',['data_guru' =>$data_gurus]);
  }
  public function create(Request $request)
{
  \App\Guru::create($request->all());
  return redirect('/guru')->with('Sukses','Data Berhasil Terinput');
 
}
public function edit($id)
{
  $data_gurus=\App\Guru::find($id);
 return view('guru/edit',['guru' => $data_gurus]);
}
public function update(Request $request,$id)
{
  $data_gurus=\App\Guru::find($id);
  $data_gurus->update($request ->all());
  return redirect ('/guru')->with('Sukses,Data Berhasil Terupdate');
}
public function delete($id)
{
  $data_gurus=\App\Guru::find($id);
  $data_gurus->delete($data_gurus);
  return redirect('/guru')->with('Sukses','Data Berhasil Terhapus');
}
}
