@extends('layouts.main')
@section ('conten')
<div class="container mt-4">
    <h1>Edit Input Poin</h1>
    @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>  
    @endif
    <div class="row">
    <div class="col-center-12">
   
    <form action="/siswa/{{$siswa->id}}/update"  method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nis</label>
                <input name="nis" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="ruangan"value="{{$siswa->nis}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="ruangan"value="{{$siswa->nama}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Alamat</label>
                <input name="alamat" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="ruangan"value="{{$siswa->alamat}}">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Agama</label>
                    <select name="agama" class="form-control" id="exampleFormControlSelect1">
                    <option value="--PILIH--" @if($siswa -> jk == '--PILIH--')selected @endif>--PILIH--</option>
                    <option value="Islam" @if($siswa -> jk == 'Islam')selected @endif>Islam</option>
                    <option value="Kristen" @if($siswa -> jk == 'Kristen')selected @endif>Kristen</option>
                    <option value="Budha" @if($siswa -> jk == 'Budha')selected @endif>Budha</option>
                    <option value="Konghuchu" @if($siswa -> jk == 'Konghuchu')selected @endif>Konghuchu</option>
                    <option value="Katholik" @if($siswa -> jk == 'Katholik')selected @endif>Katholik</option>
                    </select>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Jurusan</label>
                    <select name="jurusan" class="form-control" id="exampleFormControlSelect1">
                    <option value="--PILIH--" @if($siswa -> jk == '--PILIH--')selected @endif>--PILIH--</option>
                    <option value="RPL" @if($siswa -> jk == 'RPL')selected @endif>RPL</option>
                    <option value="RPL XI-2" @if($siswa -> jk == 'RPL XI-2')selected @endif>TKJ</option>
                    <option value="MMD" @if($siswa -> jk == 'MMD')selected @endif>MMD</option>
                    <option value="BDP" @if($siswa -> jk == 'BDP')selected @endif>BDP</option>
                    <option value="HTL" @if($siswa -> jk == 'HTL')selected @endif>HTL</option>
                    <option value="TBG" @if($siswa -> jk == 'TBG')selected @endif>TBG</option>
                    <option value="OTKP" @if($siswa -> jk == 'OTKP')selected @endif>OTKP</option>
                    </select>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Jurusan</label>
                    <select name="jurusan" class="form-control" id="exampleFormControlSelect1">
                    <option value="--PILIH--" @if($siswa -> jk == '--PILIH--')selected @endif>--PILIH--</option>
                    <option value="RPL XI-1" @if($siswa -> jk == 'RPL XI-1')selected @endif>RPL XI-1</option>
                    <option value="RPL XI-2" @if($siswa -> jk == 'RPL XI-2')selected @endif>RPL XI-2</option>
                    <option value="RPL XI-3" @if($siswa -> jk == 'RPL XI-3')selected @endif>RPL XI-3</option>
                    <option value="RPL XI-4" @if($siswa -> jk == 'RPL XI-4')selected @endif>RPL XI-4</option>
                    </select>
                    <div class="form-group">
                <label for="exampleInputEmail1">No HP</label>
                <input name="nohp" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="ruangan"value="{{$siswa->nohp}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Pembimbing</label>
                <input name="pembimbing" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="ruangan"value="{{$siswa->pembimbing}}">
                    </div>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Rayon</label>
                    <select name="rayon" class="form-control" id="exampleFormControlSelect1">
                    <option value="--PILIH--" @if($siswa -> jk == '--PILIH--')selected @endif>--PILIH--</option>
                    <option value="Sukasari 1" @if($siswa -> jk == 'Sukasari 1')selected @endif>Sukasari 1</option>
                    <option value="Wikrama 1" @if($siswa -> jk == 'Wikrama 1')selected @endif>Wikrama 1</option>
                    <option value=" Tajur 1" @if($siswa -> jk == ' Tajur 1')selected @endif> Tajur 1</option>
                    <option value="Cibedug 2" @if($siswa -> jk == 'Cibedug 2')selected @endif>Cibedug 2</option>
                    </select>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-warning">Update</button>
                </form>
                </div>
                    </div>
                    </div>
                    </div>
                    @endsection
                
        



