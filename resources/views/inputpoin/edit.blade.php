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
   
    <form action="/inputpoin/{{$inputpoin->id}}/update"  method="POST">
            {{csrf_field()}}
            <div class="form-group">
                    <label for="exampleFormControlSelect1">Kode Kejadian</label>
                    <select name="kode_kejadian" class="form-control" id="exampleFormControlSelect1">
                    <option value="H5.1" @if($inputpoin -> jk == 'H5.1')selected @endif>H5.1</option>
                    <option value="H5.2" @if($inputpoin -> jk == 'H5.2')selected @endif>H5.2</option>
                    <option value="H5.3" @if($inputpoin -> jk == 'H5.3')selected @endif>H5.3</option>
                    <option value="H5.4" @if($inputpoin -> jk == 'H5.4')selected @endif>H5.4</option>
                    <option value="H5.5" @if($inputpoin -> jk == 'H5.5')selected @endif>H5.5</option>
                    <option value="H5.6" @if($inputpoin -> jk == 'H5.6')selected @endif>H5.6</option>
                    <option value="H5.7" @if($inputpoin -> jk == 'H5.7')selected @endif>H5.7</option>
                    <option value="H5.8" @if($inputpoin -> jk == 'H5.8')selected @endif>H5.8</option>
                    <option value="H5.9" @if($inputpoin -> jk == 'H5.9')selected @endif>H5.9</option>
                    <option value="H5.10" @if($inputpoin -> jk == 'H5.10')selected @endif>H5.10</option>
                    <option value="H5.11" @if($inputpoin -> jk == 'H5.11')selected @endif>H5.11</option>
                    <option value="H5.12" @if($inputpoin -> jk == 'H5.12')selected @endif>H5.12</option>

                    </select>
                    <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="pembimbing" value="{{$inputpoin->nama}}">
                    </div> 
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Keterangan</label>
                    <select name="kategori" class="form-control" id="exampleFormControlSelect1">
                    <option value="Juara 1 Ngoding" @if($inputpoin -> jk == 'Juara 1 Ngoding')selected @endif>Juara 1 Ngoding</option>
                    <option value="Juara 1 Membuat Aplikasi" @if($inputpoin -> jk == 'Juara 1 Membuat Aplikasi')selected @endif>Juara 1 Membuat Aplikasi</option>
                    <option value="Juara 1 Membuat Aplikasi Di sekolah" @if($inputpoin -> jk == 'Juara 1 Membuat Aplikasi Di sekolah')selected @endif>Juara 1 Membuat Aplikasi Di sekolah</option>
                    <option value="Juara 1 Membuat Jaringan" @if($inputpoin -> jk == 'Juara 1 Membuat Jaringan')selected @endif>Juara 1 Membuat Jaringan</option>
                    <option value="Juara 1 Membuat Film" @if($inputpoin -> jk == 'Juara 1 Membuat Film')selected @endif>Juara 1 Membuat Film</option>
                    <option value="Juara 1 Ngetik 10 Jari Buta" @if($inputpoin -> jk == 'Juara 1 Ngetik 10 Jari Buta')selected @endif>Juara 1 Ngetik 10 Jari Buta</option>
                    <option value="Juara 1 Membuat Produk Yang berkaitan dengan sekolah" @if($inputpoin -> jk == 'Juara 1 Membuat Produk Yang berkaitan dengan sekolah')selected @endif>Juara 1 Membuat Produk Yang berkaitan dengan sekolah</option>
                </select>
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Poin</label>
                    <select name="poin" class="form-control" id="exampleFormControlSelect1">
                    <option value="10" @if($inputpoin -> jk == '10')selected @endif>10</option>
                    <option value="20" @if($inputpoin -> jk == '20')selected @endif>20</option>
                    <option value="30" @if($inputpoin -> jk == '30')selected @endif>30</option>
                    <option value="40" @if($inputpoin -> jk == '40')selected @endif>40</option>
                    <option value="50" @if($inputpoin -> jk == '50')selected @endif>50</option>
                    <option value="60" @if($inputpoin -> jk == '60')selected @endif>60</option>
                    <option value="70" @if($inputpoin -> jk == '70')selected @endif>70</option>
                    <option value="80" @if($inputpoin -> jk == '80')selected @endif>80</option>
                    <option value="90" @if($inputpoin -> jk == '90')selected @endif>90</option>
                    <option value="100" @if($inputpoin -> jk == '100')selected @endif>100</option>
                </select>
                <div class="form-group">
                <label for="exampleInputEmail1">Pembimbing</label>
                <input name="kasus" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="ruangan"value="{{$inputpoin->saksi}}">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Saksi</label>
                <input name="saksi" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="ruangan"value="{{$inputpoin->saksi}}">
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
                
        



