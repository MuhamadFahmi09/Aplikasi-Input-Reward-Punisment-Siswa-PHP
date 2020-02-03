@extends('layouts.main')
@section ('conten')
<div class="container mt-4">
    <h1>Edit Data Kasus</h1>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>  
    @endif
    <div class="row">
    <div class="col-center-12">
   
    <form action="/datakasus/{{$datakasus->id}}/update"  method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nis" value="{{$datakasus->nama}}">
                    </div>
            <div class="form-group">
                    <label for="exampleFormControlSelect1">Kategori</label>
                    <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                    <option value="Reward" @if($datakasus ->  y== 'H5.1')selected @endif>Punisment</option>
                   </select>
            <div class="form-group">
                    <label for="exampleFormControlSelect1">Data Kasus</label>
                    <select name="datakasus" class="form-control" id="exampleFormControlSelect1">
                    <option value="P4.1" @if($datakasus ->  y== 'P4.1')selected @endif>P4.1</option>
                    <option value="P4.2" @if($datakasus ->  y== 'P4.2')selected @endif>P4.2</option>
                    <option value="P4.3" @if($datakasus ->  y== 'P4.3')selected @endif>P4.3</option>
                    <option value="P4.4" @if($datakasus ->  y== 'P4.4')selected @endif>P4.4</option>
                    <option value="P4.5" @if($datakasus ->  y== 'P4.5')selected @endif>P4.5</option>
                    </select>
               
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Kejadian</label>
                    <select name="kejadian" class="form-control" id="exampleFormControlSelect1">
                    <option value="Di Kelas" @if($datakasus ->  y== 'H5.1')selected @endif>Di Kelas </option>
                    <option value="Di Mesjid" @if($datakasus ->  y== 'H5.2')selected @endif>Di Mesjid </option>
                    <option value="Di Luar Sekolah" @if($datakasus ->  y== 'H5.3')selected @endif>Di Luar Sekolah </option>
                    <option value="Di Kantin" @if($datakasus ->  y== 'H5.4')selected @endif>Di Kantin </option>
                    <option value="Di UKS" @if($datakasus ->  y== 'H5.5')selected @endif>Di UKS </option>
                    <option value="Di Lapangan" @if($datakasus ->  y== 'H5.3')selected @endif>Di Lapangan </option>
                    <option value="Di Laboratorium" @if($datakasus ->  y== 'H5.4')selected @endif>Di Lab </option>
                    <option value="Di Kamar Mandi" @if($datakasus ->  y== 'H5.5')selected @endif>Di Kamar Mandi </option>
                    </select>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Poin</label>
                    <select name="poin" class="form-control" id="exampleFormControlSelect1">
                    <option value="10" @if($datakasus ->  y== 'H5.1')selected @endif>10 </option>
                    <option value="20" @if($datakasus ->  y== 'H5.2')selected @endif>20 </option>
                    <option value="30" @if($datakasus ->  y== 'H5.3')selected @endif>30 </option>
                    <option value="40" @if($datakasus ->  y== 'H5.4')selected @endif>40 </option>
                    <option value="50" @if($datakasus ->  y== 'H5.5')selected @endif>50 </option>
                    </select>
                    <div class="form-group">
                <label for="exampleInputEmail1">Saksi</label>
                <input name="saksi" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nis" value="{{$datakasus->saksi}}">
                    </div>
            
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
                   
                    @endsection
                
        



