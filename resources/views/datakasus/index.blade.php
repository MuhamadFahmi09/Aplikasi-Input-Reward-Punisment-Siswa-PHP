@extends('layouts.main')
@section ('conten')
<div class="container mt-4">

    @if(session('sukses'))
    @endif
    <div class="row">
    <h1>Data Kasus</h1>
    <div class="col-6">
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Tambah Data Kasus
            </button>
            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Kasus</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="datakasus/create" method="POST">
            {{csrf_field()}}
            <div class="form-group">
            <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                    </div> 
                    <label for="exampleFormControlSelect1">Kategori</label>
                    <select name="datakasus" class="form-control" id="exampleFormControlSelect1">
                    <option>Punisment</option> 
                    </select>
                    <div class="form-group">
                    <strong>Kode Kejadian</strong>
                 <select name="kategori" class="form-control"class="form-control form-control-md" id="" onchange='changeValue(this.value)' required="required">>
                            <option value="" disabled="disabled" selected="selected"></option>
                            <?php
                                $con = mysqli_connect("localhost", "root","", "laravel-crud");
                                $query=mysqli_query($con, "select * from table_kasus order by kode_kasus asc");
                                $result = mysqli_query($con, "select * from table_kasus");
                                $jsArray = "var prdName = new Array();\n";
                                  while ($row = mysqli_fetch_array($result)) {
                               echo '<option name="kode_kasus"  value="' . $row['kode_kasus'] . '">' . $row['kode_kasus'].' | '.$row['kode_kasus']. '</option>';
                                 $jsArray .= "prdName['" . $row['kode_kasus'] . "'] = {keterangan:'" . addslashes($row['keterangan']) . "'};\n";
                                }
                            ?>
                </select>
            </div>
        </div>
        <div class="form-group">
                <label for="exampleInputEmail1">Keterangan</label>
                <input name="kasus" type="Text" class="form-control" id="keterangan" aria-describedby="nama">
                    </div> 
                                
         
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Poin</label>
                    <select name="poin" class="form-control" id="exampleFormControlSelect1">
                    <option>10</option>
                    <option>20</option>
                    <option>30</option>
                    </select>
                    <div class="form-group">
                <label for="exampleInputEmail1">Saksi</label>
               <select name=saksi class="form-control  ">
               @foreach ($guru as $guru)
                    <option value="{{ $guru->nama }}" >{{ $guru->nama }}</option>
                @endforeach
               </select>
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
    </div>
                <table class="table table-bordered">
        <tr>
            <th>Nama</th>
            <th>Kategori</th>
            <th>Kode Kasus</th>
            <th>Kejadian</th>
            <th>Poin</th>
            <th>Saksi</th>
           
            <th  colspan="3">Aksi</th>
        </tr>
@foreach($data_kasus as $datakasus)
<tr>
    <td>{{$datakasus->nama}}</td>
    <td>{{$datakasus->datakasus}}</td>
    <td>{{$datakasus->kategori}}</td>
    <td>{{$datakasus->kasus}}</td>
    <td>{{$datakasus->poin}}</td>
    <td>{{$datakasus->saksi}}</td>
    <td><a href="datakasus/{{$datakasus->id}}/edit" class="btn btn-warning btn-sn">Edit</a></td>
    <td>
        <a href="datakasus/{{$datakasus->id}}/delete" class="btn btn-danger btn-sn" onclick="return confrim('Apakah Yakin Data Akan DiHapus')">Hapus</a>
    </td>
    <td>      
    <a href="/datakasus/{{$datakasus->id}}/print" class="btn btn-link btn-sn">Cetak Laporan</a>
    </td>
</tr>
@endforeach
</table>
    
    
@endsection
<script type="text/javascript">
         <?php echo $jsArray; ?>
        function changeValue(id){
            console.log(id);
            document.getElementById('keterangan').value = prdName[id].keterangan;
            
        }
        </script> -->
