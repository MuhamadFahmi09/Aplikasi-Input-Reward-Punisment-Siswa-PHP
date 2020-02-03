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
   
    <form action="/rayon/{{$rayon->id}}/update"  method="POST">
            {{csrf_field()}}
            <div class="form-group">
                    <label for="exampleFormControlSelect1">Nama Rayon</label>
                    <select name="nama_rayon" class="form-control" id="exampleFormControlSelect1">
                    <option value="Tajur 1" @if($rayon -> rayon == 'tajur1')selected @endif>Tajur 1</option>
                    <option value="Tajur 2" @if($rayon -> rayon == 'tajur2')selected @endif>Tajur 2</option>
                    <option value="Tajur 3" @if($rayon -> rayon == 'tajur3')selected @endif>Tajur 3</option>
                    <option value="Tajur 4" @if($rayon -> rayon == 'tajur4')selected @endif>Tajur 4</option>
                    <option value="Tajur 5" @if($rayon -> rayon == 'tajur5')selected @endif>Tajur 5</option>
                    <option value="Tajur 6" @if($rayon -> rayon == 'tajur6')selected @endif>Tajur 6</option>
                    </select>
                    <div class="form-group">
                <label for="exampleInputEmail1">Pembimbing</label>
                <input name="pembimbing" type="Text" class="form-control" id="exampleInputEmail1" aria-describedby="pembimbing" value="{{$rayon->pembimbing}}">
                    </div> 
                    <div class="form-group">
                    <label for="exampleFormControlSelect1">Nama Rayon</label>
                    <select name="ruangan" class="form-control" id="exampleFormControlSelect1">
                    <option value="R.217" @if($rayon -> rayon == 'ruangan')selected @endif>Ruangan 217</option>
                    <option value="R.218" @if($rayon -> rayon == 'ruangan')selected @endif>Ruangan 218</option>
                    <option value="R. 219" @if($rayon -> rayon == 'ruangan')selected @endif>Ruangan 219</option>
                    <option value="R. 220" @if($rayon -> rayon == 'ruangan')selected @endif>Ruangan 220</option>
                    <option value="R. 221" @if($rayon -> rayon == 'ruangan')selected @endif>Ruangan 221</option>
                    <option value="R. 222" @if($rayon -> rayon == 'ruangan')selected @endif>Ruangan 222</option>
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
                
        



