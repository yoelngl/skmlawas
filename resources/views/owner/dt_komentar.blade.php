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

                        <table id="example" class="table table-striped table-bordered w-100">
                            <tr>
                                <th colspan="2">Daftar Taman</th> 
                                
                            </tr>

                            @foreach($tamans as $taman)
                                <tr>
                                    <td>
                                        {{ $taman->nama_taman }} 
                                        <a href="{{ url('/komentar/'. $taman->taman_id . '/komentar') }}" class="pull-right"> <i class="fa fa-eye" style="font-size: 20px;"></i></a>
                                    </td>
                                </tr>
                            @endforeach
                        </table>

                    </div>
                </div>
            </div>
        </div> 
    </div>
</div>

@endsection