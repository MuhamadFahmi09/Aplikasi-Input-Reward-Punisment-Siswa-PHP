@extends('layouts.main')
@section ('conten')
<div class="container mt-4">

  
    @if(session('sukses'))
    @endif
    <div class="row">
    <h1>Input Poin</h1>
    <div class="col-6">
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Input Poin
            </button>
            <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data Siswa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
            <form action="inputpoin/create" method="POST">
            {{csrf_field()}}
            <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kode Kejadian</strong>
                 <select name="kode_kejadian" class="form-control"class="form-control form-control-md" id="" onchange='changeValue(this.value)' required="required">>
                            <option value="" disabled="disabled" selected="selected"></option>
                            <?php
                                $con = mysqli_connect("localhost", "root","", "laravel-crud");
                                $query=mysqli_query($con, "select * from table_penghargaan order by kode_penghargaan asc");
                                $result = mysqli_query($con, "select * from table_penghargaan");
                                $jsArray = "var prdName = new Array();\n";
                                  while ($row = mysqli_fetch_array($result)) {
                               echo '<option name="kode_penghargaan"  value="' . $row['kode_penghargaan'] . '">' . $row['kode_penghargaan'].' | '.$row['kode_penghargaan']. '</option>';
                                 $jsArray .= "prdName['" . $row['kode_penghargaan'] . "'] = {keterangan:'" . addslashes($row['keterangan']) . "'};\n";
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
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                    </div> 
           
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Poin</label>
                    <select name="poin" class="form-control" id="exampleFormControlSelect1">
                    <option>10</option>
                    <option>20</option>
                    <option>30</option>
                    </select>
                    <div class="form-group">
                <label for="exampleInputEmail1">Pembimbing Rayon</label>
               <select name=kategori class="form-control  ">
               @foreach ($guru as $guru )
                    <option value="{{$guru->nama }}" >{{$guru->nama}}</option>
                @endforeach
               </select>
               </div>
                   
                    <div class="form-group">
                <label for="exampleInputEmail1">Saksi</label>
                <input name="saksi" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
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
            <th>Kode Kejadian</th>
            <th>Keterangan </th>
            <th>Nama</th>
            <th>Poin</th>
            <th>Pembimibing</th>
            <th>Saksi</th>
            <th colspan="3">Aksi</th>
        </tr>
@foreach($data_inputpoins as $datapoin)
<tr>
    <td>{{$datapoin->kode_kejadian}}</td>
    <td>{{$datapoin->nama}}</td>
    <td>{{$datapoin->poin}}</td>
    <td>{{$datapoin->kategori}}</td>
    <td>{{$datapoin->kasus}}</td>
    <td>{{$datapoin->saksi}}</td>   
    
    <td><a href="/inputpoin/{{$datapoin->id}}/edit" class="btn btn-warning btn-sn">Edit</a></td>
    <td>
        
        <a href="/inputpoin/{{$datapoin->id}}/delete" class="btn btn-danger btn-sn" onclick="return confrim('Apakah Yakin Data Akan DiHapus')">Hapus</a>
    </td>
      <td>      
    <a href="/inputpoin/{{$datapoin->id}}/print" class="btn btn-link btn-sn">Cetak Laporan</a>
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
