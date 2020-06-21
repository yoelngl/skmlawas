
@extends('layout.layadmin')
<style type="text/css">
    table tr td {
        padding : 10px 5px 10px 5px;
    }

    textarea.ta{
    display: block;
    width: 100%;
    height: 87px;
    padding: 0.375rem 0.75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: 0.25rem;
    transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
    resize: none;
    }

    .bt{
    margin-bottom: 5px;
    }

    .btijo{
        margin-bottom: 10px;
    }
</style>
@section('content')   

  <div class="main-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-card m-b-30">
                        <div class="au-card-inner">

<div class="container">
    @if(session('sukses'))
        <div class="alert alert-success" role="alert">
        {{session('sukses')}}
        </div>
    @endif

    <div class="row">
        <div class="col-6">
            <h2> Data Taman </h2>
        </div>
        <br>
        <div class="col-6">
                <!-- Button trigger modal -->
        <button type="button" class="btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
          Tambah data
        </button>

        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">

                      <form action="/taman/create" method="POST" enctype="multipart/form-data">
                        {{csrf_field()}}
                      <div class="form-group">
                        <label for="exampleInputEmail1">Nama Taman</label>
                        <input id="nama_taman" name="nama_taman" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailhelp" placeholder="Nama Taman">
                      </div>

                       <div class="form-group">
                        <label for="exampleInputEmail1">Gambar</label>
                         <div class="col s6">
                         <img id="showgambar1"  style="max-width:200px;max-height:200px;float:left;margin-left:6px;" />
                         </div>
                        <input id="gambar" name="gambar" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailhelp" placeholder="Gambar">
                      </div>

                      <div class="form-group">
                        <label for="exampleInputEmail1">Fungsi</label>
                        <input id="fungsi" name="fungsi" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailhelp" placeholder="Fungsi">
                      </div>


                        <div class="form-group">
                        <label for="exampleInputEmail1">Layanan</label>
                        <input id="layanan" name="layanan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailhelp" placeholder="Layanan">
                      </div>

                       <div class="form-group">
                        <label for="exampleFormControlTextarea1">Alamat</label>
                        <textarea id="alamat" name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                      </div>
                
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                
                </form>
              </div>
            </div>
          </div>
        </div>
        </div>  
         <table id="example" class="table table-striped table-bordered" style="width:100%">
            <tr>
                <th>NAMA TAMAN</th>
                <th>GAMBAR</th>
                <th>FUNGSI</th>
                <th>LAYANAN</th>
                <th>ALAMAT</th>
                <th>OPSI</th>
            </tr>
            @foreach($taman as $taman)
            <tr>
                <td>{{$taman->nama_taman}}</td>
                <td><img src="{{ asset('foto/'.$taman->gambar) }}" width="100"></td>
                <td>{{$taman->fungsi}}</td>
                <td>{{$taman->layanan}}</td>
                <td>{{$taman->alamat}}</td>
                <td>
                    <a href="/taman/{{$taman->taman_id}}/edit" class="btn btn-warning">Ubah</a>
                    <a href="/taman/{{$taman->taman_id}}/hapus" class="btn btn-danger" onclick="return confirm ('yakin ingin dihapus?')">Hapus</a>
                </td>           
            </tr>
            @endforeach
        </table>
    </div>
</div>

</form>
</div></div></div></div></div></div>


@endsection

