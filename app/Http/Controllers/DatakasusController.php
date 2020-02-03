<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
Use App\Datakasus;
Use App\Guru;
class DatakasusController extends Controller
{
    public function  index()
  {
    $guru = Guru::all();
      $data_kasus=\App\Datakasus::all();
      return view ('datakasus.index',['data_kasus' =>$data_kasus], compact('guru'));
  }
  public function create(Request $request)
{
  \App\Datakasus::create($request->all());
  return redirect('/datakasus')->with('Sukses','Data Berhasil Terimput');
 
}
public function edit($id)
{
  $data_kasus=\App\Datakasus::find($id);
 return view('datakasus/edit',['datakasus' => $data_kasus]);
}
public function update(Request $request,$id)
{
  $data_kasus=\App\Datakasus::find($id);
  $data_kasus->update($request ->all());
  return redirect ('/datakasus')->with('Sukses,Data Berhasil Terupdate');
}
public function delete($id)
{
  $data_kasus=\App\Datakasus::find($id);
  $data_kasus->delete($data_kasus);
  return redirect('/datakasus')->with('Sukses','Data Berhasil Terhapus');
}
public function print($id, Datakasus $data_kasus)
{
  $data_kasus=Datakasus::all()->find($id);
  $pdf = PDF::loadView('datakasus.print', compact('data_kasus'))->setPAper('a4', 'landscape');
  return $pdf->stream();
}
}
