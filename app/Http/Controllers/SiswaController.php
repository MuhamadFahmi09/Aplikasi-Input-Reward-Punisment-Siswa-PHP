<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
Use App\Siswa;
Use App\Guru;
class SiswaController extends Controller
{
    public function  index()
    {
      $guru = Guru::all();
        $siswa=\App\Siswa::all();
        return view ('siswa.index',['siswa' =>$siswa],compact('guru'));
      
      }
    public function create(Request $request)
{
  \App\Siswa::create($request->all());
  return redirect('/siswa')->with('Sukses','Data Berhasil Terimput');
 
}
public function edit($id)
{
  $siswa=\App\Siswa::find($id);
 return view('siswa/edit',['siswa' => $siswa]);
}
public function update(Request $request,$id)
{
  $siswa=\App\Siswa::find($id);
  $siswa->update($request ->all());
  return redirect ('/siswa')->with('Sukses,Data Berhasil Terupdate');
}
public function delete($id)
{
  $siswa=\App\Siswa::find($id);
  $siswa->delete($siswa);
  return redirect('/siswa')->with('Sukses','Data Berhasil Terhapus');
}
public function print($id, Siswa $siswa)
{
  $siswa=Siswa::all()->find($id);
  $pdf = PDF::loadView('siswa.print', compact('siswa'))->setPaper('a4', 'landscape');
  return $pdf->stream();
}
}
