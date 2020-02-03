<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;
use App\Inputpoin;
use App\Guru;

class InputpoinController extends Controller
{
    public function  index()
    {
        $guru = Guru::all();
        $data_inputpoins=\App\Inputpoin::all();
        return view ('inputpoin.index',['data_inputpoins' =>$data_inputpoins], compact('guru'));
    }
    public function create(Request $request)
{
  \App\Inputpoin::create($request->all());
  return redirect('/inputpoin')->with('Sukses','Data Berhasil Terimput');
 
}
public function edit($id)
{
  $data_inputpoins=\App\Inputpoin::find($id);
 return view('inputpoin/edit',['inputpoin' => $data_inputpoins]);
}
public function update(Request $request,$id)
{
  $data_inputpoins=\App\Inputpoin::find($id);
  $data_inputpoins->update($request ->all());
  return redirect ('/inputpoin')->with('Sukses,Data Berhasil Terupdate');
}
public function delete($id)
{
  $data_inputpoins=\App\Inputpoin::find($id);
  $data_inputpoins->delete($data_inputpoins);
  return redirect('/inputpoin')->with('Sukses','Data Berhasil Terhapus');
}
public function print($id, Inputpoin $data_inputpoins)
{
  $data_inputpoins=Inputpoin::all()->find($id);
  $pdf = PDF::loadView('inputpoin.print', compact('data_inputpoins'))->setPaper('a4', 'landscape');
  return $pdf->stream();
}
}
