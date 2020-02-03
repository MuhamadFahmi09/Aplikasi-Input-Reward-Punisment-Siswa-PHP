@extends('layouts.main')
@section ('conten')
<div class="container mt-4">
    <h1>Edit Data Rayon</h1>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>  
    @endif
    <div class="row">
    <div class="col-center-12">
   
    <form action="/guru/{{$guru->id}}/update"  method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nip</label>
                <input name="nip" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="pembimbing" value="{{$guru->nip}}">
                    </div> 
                    <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama" value="{{$guru->nama}}">
                    </div> 
            <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="jk" class="form-control" id="exampleFormControlSelect1">
                    <option value="laki-laki" @if($guru -> rayon == 'laki-laki')selected @endif>Laki-Laki</option>
                    <option value="perempuan" @if($guru -> rayon == 'perempuan')selected @endif>Perempuan</option>
                    </select>
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea  name="alamat"class="form-control" id="exampleFormControlTextarea1" rows="3" aria-describedby="alamat" value="{{$guru->alamat}}"></textarea>
                </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">NoHp</label>
                <input name="nohp" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nohp" value="{{$guru->nohp}}">
                    </div> 
         
            
            
      
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
                    </div>
                    </div>
                    </div>
                    @endsection
                
        



