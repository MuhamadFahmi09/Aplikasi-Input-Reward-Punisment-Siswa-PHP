@extends('layouts.main')
@section ('conten')
<div class="container mt-4">

    @if(session('sukses'))
    @endif
    <div class="row">
    <h1>Data Rayon</h1>
    <div class="col-6">
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah Data Rayon
            </button>
            <table class="table table-bordered">
        <tr>
            <th>Nama Rayon</th>
            <th>Pembimbing</th>
            <th>Ruangan</th>
           
            <th  colspan="2">Aksi</th>
        </tr>
@foreach($data_rayons as $rayon)
<tr>
    <td>{{$rayon->nama_rayon}}</td>
    <td>{{$rayon->pembimbing}}</td>
    <td>{{$rayon->ruangan}}</td>
   
    <td><a href="/rayon/{{$rayon->id}}/edit" class="btn btn-warning btn-sn">Edit</a></td>
    <td>
        <a href="/rayon/{{$rayon->id}}/delete" class="btn btn-danger btn-sn" onclick="return confrim('Apakah Yakin Data Akan DiHapus')">Hapus</a>
    </td>
</tr>
@endforeach
</table>
            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Rayon</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="rayon/create" method="POST">
            {{csrf_field()}}
                          
                <div class="form-group">
                <label for="exampleInputEmail1">Rayon</label>
                <input type="text" class="form-control" name="nama_rayon" id="nama_rayon">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Pembimbing</label>
                <input type="text" class="form-control" name="pembimbing" id="pembimbing">
                </div>
               <div class="form-group">
                <label for="exampleInputEmail1">Ruangan</label>
                <input name="ruangan" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
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
    </div>
    </div>
    
@endsection
