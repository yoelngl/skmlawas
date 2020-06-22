@extends('layout.layowner')

@section('title')
Dashboard
@endsection
    <style type="text/css">
    .tab tr td{
        padding: 4px 4px 4px 4px;
    }
    </style>
@section('content') 
    


                    <!-- OVERVIEW -->
                    <div class="panel panel-headline">
                        <div class="panel-heading">
                            <h3 class="panel-title">Halaman Ketua DLHKP</h3>
                            <p class="panel-subtitle">Dinas Lingkungan Hidup Kebersihan dan Pertamanan</p>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="metric">
                                        <span class="icon"><div style="margin-top: 15px"><i class="fa fa-download"></i></div></span>
                                        <p>
                                            <span class="number">{{$dashboard->count()}}</span>
                                            <span class="title">Survei</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="metric">
                                        <span class="icon"><div style="margin-top: 15px"><i class="fa fa-shopping-bag"></i></div></span>
                                        <p>
                                            <span class="number">{{$jmltaman->count()}}</span>
                                            <span class="title">taman</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="metric">
                                        <span class="icon"><div style="margin-top: 15px"><i class="fa fa-eye"></i></div></span>
                                        <p>
                                            <span class="number">{{$jmlpertanyaan->count()}}</span>
                                            <span class="title">pertanyaan</span>
                                        </p>
                                    </div>
                                </div>
                            </div>





@endsection