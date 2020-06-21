<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
<div class="container">



  <center><h1>Edit Data Taman</h1></center>
  <br>
  @if(session('sukses'))
    <div class="alert alert-success" role="alert">
      {{session('sukses')}}
    </div>
  @endif


  <div class="row">
    <div class="col-lg-12">
      @foreach($dttaman as $taman)
       <form action="/taman/{{$taman->taman_id}}/update" method="POST">
              {{csrf_field()}}              
            <div class="form-group">
              <label for="exampleInputEmail1">Nama Taman</label>
              <input name="nama_taman" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailhelp" placeholder="Nama Taman" value="{{$taman->nama_taman}}">
            </div>

             <div class="form-group">
              <label for="exampleInputEmail1">Gambar</label>
              <input name="gambar" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailhelp" placeholder="Gambar" value="{{$taman->gambar}}">
              <input type="hidden" name="file_old" value="{{$taman->gambar}}">
             </div>

               <div class="form-group">
              <label for="exampleInputEmail1">Fungsi</label>
              <input name="fungsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailhelp" placeholder="Nama Belakang" value="{{$taman->fungsi}}">
             </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Layanan</label>
              <input name="layanan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailhelp" placeholder="Agama" value="{{$taman->layanan}}">
              </div>

              <div class="form-group">
              <label for="exampleFormControlTextarea1">Alamat</label>
              <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"> {{$taman->alamat}}
              </textarea>
              </div>

              <button type="submit" class="btn btn-warning">Update</button>
      </form>
      @endforeach
    </div>
  </div>  


  </div>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>
</html>