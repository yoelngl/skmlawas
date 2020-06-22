@extends('layout.layowner')
@section('title')
Data Taman
@endsection
<style type="text/css">
    .tab tr td{
        padding: 4px 4px 4px 4px;
    }
</style>
@section('content') 
            
<div class="main-content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="au-card m-b-30">
                    <div class="au-card-inner">
                        <div><h3 style="text-align: center;"><b>DATA TAMAN</b></h3></div>
                        <br>

                        <table id="example" class="table table-striped table-bordered" style="width:100%">
                        <tr>
                            <th>NAMA TAMAN</th>
                            <th>GAMBAR</th>
                            <th>FUNGSI</th>
                            <th>LAYANAN</th>
                            <th>ALAMAT</th>
                        </tr>
                            @foreach($ad_taman as $taman)
                        <tr>
                            <td>{{$taman->nama_taman}}</td>
                            <td><img src="{{ asset('foto/'.$taman->gambar) }}" width="100"></td>
                           <!--  <td>{{$taman->gambar}}</td> -->
                            <td>{{$taman->fungsi}}</td>
                            <td>{{$taman->layanan}}</td>
                            <td>{{$taman->alamat}}</td>              
                        </tr>
                        @endforeach



                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>



@endsection