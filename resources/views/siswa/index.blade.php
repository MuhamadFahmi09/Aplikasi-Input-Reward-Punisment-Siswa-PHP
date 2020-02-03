@extends('layouts.main')
@section ('conten')
<div class="container mt-4">

  
    @if(session('sukses'))
    @endif
    <div class="row">
    <h1>Tambah Data Siswa</h1>
    <div class="col-6">
                <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
            Input Data Siswa
            </button>
            <table class="table table-bordered">
        <tr>
            <th>Nis</th>
            <th>Nama </th>
            <th>Alamat</th>
            <th>Agama</th>
            <th>Jurusan</th>
            <th>Rombel</th>
            <th>NoHP</th>
            <th>Pembimbing</th>
            <th>Rayon</th>
            <th colspan="3">Aksi</th>
        </tr>
@foreach($siswa as $siswa)
<tr>
    <td>{{$siswa->nis}}</td>
    <td>{{$siswa->nama}}</td>
    <td>{{$siswa->alamat}}</td>
    <td>{{$siswa->agama}}</td>
    <td>{{$siswa->jurusan}}</td>
    <td>{{$siswa->rombel}}</td>   
    <td>{{$siswa->nohp}}</td>
    <td>{{$siswa->pembimbing}}</td>
    <td>{{$siswa->rayon}}</td>
    <td><a href="/siswa/{{$siswa->id}}/edit" class="btn btn-warning btn-sn">Edit</a></td>
    <td>
        
        <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sn" onclick="return confrim('Apakah Yakin Data Akan DiHapus')">Hapus</a>
    </td>
      <td>      
    <a href="/siswa/{{$siswa->id}}/print" class="btn btn-link btn-sn">Cetak Laporan</a>
    </td>
    
    
</tr>
@endforeach
</table>
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
            <form action="siswa/create" method="POST">
            {{csrf_field()}}
           
            <div class="form-group">
                <label for="exampleInputEmail1">Nis</label>
                <input name="nis" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                <label for="exampleInputEmail1">Nama</label>
                <input name="nama" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Alamat</label>
                    <textarea  name="alamat"class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-group">
                    <label for="exampleFormControlSelect1">Agama</label>
                    <select name="agama" class="form-control" id="exampleFormControlSelect1">
                    <option>--PILIH--</option>
                    <option>Islam</option>
                    <option>Kristen</option>
                    <option>Budha</option>
                    <option>Katholik</option>
                    <option>Konghuchu</option>
                    <option>Budha</option>
                    </select>

                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Jurusan</label>
                    <select name="jurusan" class="form-control" id="exampleFormControlSelect1">
                    <option>--PILIH--</option>
                    <option>RPL</option>
                    <option>TKJ</option>
                    <option>BDP</option>
                    <option>MMD</option>
                    <option>OTKP</option>
                    <option>HTL</option>
                    <option>TBG</option>
                    </select>

    
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Rombel</label>
                    <select name="rombel" class="form-control" id="exampleFormControlSelect1">
                    <option>--PILIH---</option>
                    <option>RPL XI-1</option>
                    <option>TKJ XI-1</option>
                    <option>BDP XI-1</option>
                    <option>MMD XI-1</option>
                    <option>OTKP XI-1</option>
                    <option>HTL XI-1</option>
                    <option>TBG XI-1</option>
                </select>

                
                <div class="form-group">
                <label for="exampleInputEmail1">No HP</label>
                <input name="nohp" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="nama">
                </div>
               
                <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Rayon</strong>
                 <select name="rayon" class="form-control"class="form-control form-control-md" id="" onchange='changeValue(this.value)' required="required">>
                            <option value="" disabled="disabled" selected="selected"></option>
                            <?php
                                $con = mysqli_connect("localhost", "root","", "laravel-crud");
                                $query=mysqli_query($con, "select * from table_rayons order by nama_rayon asc");
                                $result = mysqli_query($con, "select * from table_rayons");
                                $jsArray = "var prdName = new Array();\n";
                                  while ($row = mysqli_fetch_array($result)) {
                               echo '<option name="nama_rayon"  value="' . $row['nama_rayon'] . '">' . $row['nama_rayon'].' | '.$row['nama_rayon']. '</option>';
                                 $jsArray .= "prdName['" . $row['nama_rayon'] . "'] = {pembimbing:'" . addslashes($row['pembimbing']) . "'};\n";
                                }
                            ?>
                </select>
            </div>
        </div>
       
                
                <div class="form-group">
                <label for="exampleInputEmail1">Pembimbing</label>
                <input type="text" class="form-control" name="pembimbing" id="pembimbing">
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
@endsection
<script type="text/javascript">
         <?php echo $jsArray; ?>
        function changeValue(id){
            console.log(id);
            document.getElementById('pembimbing').value = prdName[id].pembimbing;
            
        }
        </script> -->
