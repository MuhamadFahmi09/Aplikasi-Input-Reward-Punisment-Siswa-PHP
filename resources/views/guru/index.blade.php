@extends('layouts.main')
@section ('conten')
<div class="container mt-4">

    @if(session('sukses'))
    @endif
    <div class="row">
    <h1>Data Guru</h1>
    <div class="col-6">
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah Data Guru
            </button>
            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Guru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="/guru/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
                <label for="exampleInputEmail1">Nip</label>
                <input name="nip" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nip">
                    </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                    </div> 
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Jenis Kelamin</label>
                    <select name="jk" class="form-control" id="exampleFormControlSelect1">
                    <option>Laki-Laki</option>
                    <option>Perempuan</option>
                    </select>
                    <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea  name="alamat"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                    <div class="form-group">
                <label for="exampleInputEmail1">NoHp</label>
                <input name="nohp" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nohp">
                    </div> 
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Kembali</button>
                <button type="submit" class="btn btn-primary">Simpan</button>
                </form>
            </div>
            </div>
        </div>
        </div>
        </div>
                

            <table class="table table-bordered" >
        <tr>
            <th>Nip</th>
            <th>Nama </th>
            <th>Jenis Kelamin</th>
            <th>Alamat</th>
            <th>Nohp</th>
            <th colspan="2">Aksi</th>
        </tr>
@foreach($data_guru as $guru)
<tr>
    <td>{{$guru->nip}}</td>
    <td>{{$guru->nama}}</td>
    <td>{{$guru->jk}}</td>
    <td>{{$guru->alamat}}</td>
    <td>{{$guru->nohp}}</td>
    <td><a href="/guru/{{$guru->id}}/edit" class="btn btn-warning btn-sn">Edit</a>
    </td>
    <td>
    <a href="/guru/{{$guru->id}}/delete" class="btn btn-danger btn-sn" onclick="return confrim('Apakah Yakin Data Akan DiHapus')">Hapus</a>
    </td>
   
</tr>
@endforeach
</table>
    </div>
    </div>
   </div>
    
@endsection
