@extends('layout.layowner')
@section('title')
Detail Komentar Taman
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
                        <div><h3 style="text-align: center;"><b>KOMENTAR TAMAN</b></h3></div>
                        <br>

                        <h3>{{$komentars[0]->nama_taman}}</h3>
						
                        <table id="example" class="table table-striped table-bordered w-100">
                            <tr>
                                <th>Kategori</th> 
                                <th>Ulasan</th> 
                            </tr>

                            @foreach($komentars as $komentar)
                                <tr>
                                    <td> {{ $komentar->kategori_layanan }} </td>
                                    <td> {{ $komentar->ulasan }} </td>
                                </tr>
                            @endforeach
                        </table>

						<a href="{{url('/dt_komentar')}}" class="btn btn-success"> Kembali </a>

                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>



@endsection