@extends('layout.layowner')
@section('title')
Rekapitulasi Nilai Survei
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
                        <div class="text-center">
                            <h3><b>REKAPITULASI NILAI SURVEI</b></h3>
                            <h4>{{$dt_thi[0]->nama_taman}}</h4>
                        </div>
                        <br>
                       
            
                    </div>


                  
                <center>
                    <button class="btn btn-success" data-toggle="modal" data-target="#tampil">
                        <!-- <i class="fa fa-e"></i> --> NIlai Mutu
                    </button>
                    <button class="btn btn-success" data-toggle="modal" data-target="#tampilskm">
                        <!-- <i class="fa fa-e"></i> --> Tampil SKM
                    </button>
                </center>
            </div>
                </div>
            </div>
        </div> 
    </div>
</div>
                    <?php
                        $jumlah = DB::table('responden')
                                ->WHERE('taman_id', '=', $dt_thi[0]->taman_id)
                                ->count();

                        $a = DB::table('nilai')
                            ->WHERE('taman_id', '=', $dt_thi[0]->taman_id)
                            ->SUM('U1')/$jumlah*0.11;
                            
                        $b = DB::table('nilai')
                            ->WHERE('taman_id', '=', $dt_thi[0]->taman_id)
                            ->SUM('U2')/$jumlah*0.11;
                            
                        $c = DB::table('nilai')
                            ->WHERE('taman_id', '=', $dt_thi[0]->taman_id)
                            ->SUM('U3')/$jumlah*0.11;
                            
                        $d = DB::table('nilai')
                            ->WHERE('taman_id', '=', $dt_thi[0]->taman_id)
                            ->SUM('U4')/$jumlah*0.11;
                            
                        $e = DB::table('nilai')
                            ->WHERE('taman_id', '=', $dt_thi[0]->taman_id)
                            ->SUM('U5')/$jumlah*0.11;
                            
                        $f = DB::table('nilai')
                            ->WHERE('taman_id', '=', $dt_thi[0]->taman_id)
                            ->SUM('U6')/$jumlah*0.11;
                            
                        $g = DB::table('nilai')
                            ->WHERE('taman_id', '=', $dt_thi[0]->taman_id)
                            ->SUM('U7')/$jumlah*0.11;
                            
                        $h = DB::table('nilai')
                            ->WHERE('taman_id', '=', $dt_thi[0]->taman_id)
                            ->SUM('U8')/$jumlah*0.11;
                            
                        $i = DB::table('nilai')
                            ->WHERE('taman_id', '=', $dt_thi[0]->taman_id)
                            ->SUM('U9')/$jumlah*0.11;
                            
                    ?>
<div class="modal fade" id="tampil" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 10px;width: 102%;">
                    <div class="modal-header">
                       <center><h3 class="modal-title" id="mediumModalLabel">NILAI MUTU </h3></center>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                    $nilai = ROUND(($a+$b+$c+$d+$e+$f+$g+$h+$i),2); 
                    
                    if (($nilai >= 3.5324) && ($nilai <= 4.00)){
                        $ni  = "3,5324 - 4,00";
                        $no_hp = "88,31 - 100,00";
                        $nh  = "A";
                        $kup = "Sangat Baik";
                    } else if (($nilai >= 3.0644) && ($nilai <= 3.532)) {
                        $ni  = "3,0644 - 3,532";
                        $no_hp = "76,61 - 88,30";
                        $nh  = "B";
                        $kup = "Baik";
                    } else if (($nilai >= 2.60) && ($nilai <= 3.064)) {
                        $ni  = "2,60 - 3,064";
                        $no_hp = "65,00 - 76,60";
                        $nh  = "C";
                        $kup = "Kurang Baik";
                    } else if (($nilai >= 1.00) && ($nilai <= 2.5996)) {
                        $ni  = "1,00 - 2,5996";
                        $no_hp = "25,00 - 64,99";
                        $nh  = "D";
                        $kup = "Tidak Baik";
                    } else {
                        $ni = $nilai;
                        $no_hp = "0,00 - 64,98";
                        $nh = "Tidak Ada";
                        $kup = "Sangat Buruk";
                    }
                    ?>
                    <div class="modal-body">
                        <center>
                            <table border>
                                <thead style="text-align:center;font-weight: bold;background-color: lightgreen;">
                                    <td>NILAI INTERVAL</td>
                                    <td>NILAI INTERVAL KONVERSI</td>
                                    <td style="width: 20px;padding: 10px;">MUTU PELAYANAN</td>
                                    <td>KINERJA UNIT PELAYANAN</td>
                                </thead>
                                <tbody style="text-align:center;font-weight: bold;padding: 0px 20px 0px 20px;">
                                    <td><h2><?= $ni ?></h2></td>
                                    <td><h2><?= $no_hp ?></h2></td>
                                    <td><h2><?= $nh ?></h2></td>
                                    <td><h2><?= $kup ?></h2></td>
                                </tbody>
                            </table>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class=""></i> Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="tampilskm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content" style="border-radius: 10px;margin-top: -5px;">
                    <!-- <div class="modal-header">
                        <h5 class="modal-title" id="mediumModalLabel">Hasil SKM</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> -->
                    <div class="modal-body">
                        <center>
                            <h3><b>
                                SURVEY KEPUASAN MASYARAKAT(SKM)<br>
                                DINAS/KANTOR/UNIT/UPT DLHKP<br>
                                KEMENTRIAN/LEMBAGA/PEMERINTAH PROV/ KAB/KOTA KEDIRI <br>
                                BULAN/TRIWULAN/ SEMESTER/.....  TAHUN <?php echo date('Y'); ?>
                            </b></h3>
                            <div style="width:47%;border:2px solid black;padding:5px;display: inline-grid;border-radius: 0px 0px 0px 0px ;height: 327px;">
                                <h5>
                                    <b>NILAI IKM</b>
                                </h5>
                                <?php $skm = ROUND(($a+$b+$c+$d+$e+$f+$g+$h+$i)*25,1)?>
                                <font style="font-size: 180px;">{{$skm}}</font>
                            </div>
                            <?php 
                                $P = DB::table('responden')
                                            ->where('GENDER','like','P')
                                            ->where('taman_id', '=', $dt_thi[0]->taman_id)
                                            ->count();

                                $L = DB::table('responden')
                                            ->where('GENDER','like','L')
                                            ->where('taman_id', '=', $dt_thi[0]->taman_id)
                                            ->count();

                                $SD = DB::table('responden')
                                            ->where('PENDIDIKAN','like','SD')
                                            ->where('taman_id', '=', $dt_thi[0]->taman_id)
                                            ->count();

                                $SMP = DB::table('responden')
                                            ->where('PENDIDIKAN','like','SMP')
                                            ->where('taman_id', '=', $dt_thi[0]->taman_id)
                                            ->count();

                                $SMA = DB::table('responden')
                                            ->where('PENDIDIKAN','like','SMA')
                                            ->where('taman_id', '=', $dt_thi[0]->taman_id)
                                            ->count();

                                $S1 = DB::table('responden')
                                            ->where('PENDIDIKAN','like','S1')
                                            ->where('taman_id', '=', $dt_thi[0]->taman_id)
                                            ->count();

                                $S2 = DB::table('responden')
                                            ->where('PENDIDIKAN','like','S2')
                                            ->where('taman_id', '=', $dt_thi[0]->taman_id)
                                            ->count();

                                $S3 = DB::table('responden')
                                            ->where('PENDIDIKAN','like','S3')
                                            ->where('taman_id', '=', $dt_thi[0]->taman_id)
                                            ->count();
                            ?>
                            <div style="width:50%;border:2px solid black;padding:5px;display: inline-grid;border-radius: 0px 0px 0px 0px;height: 327px;">
                                <h5>NAMA PELAYANAN : .....</h5>
                                <b>RESPONDEN</b>
                                <table class="tab">
                                    <tr>
                                        <td>JUMLAH </td>
                                        <td>:</td>
                                        <td>{{$jumlah}}</td>
                                        <td>orang</td>
                                    </tr>
                                    <tr>
                                        <td>JENIS KELAMIN </td>
                                        <td>:</td>
                                        <td>L</td><td>= {{$L}} orang / P = {{$P}} orang</td>
                                    </tr>
                                    <tr>
                                        <td>PENDIDIKAN</td>
                                        <td>:</td>
                                        <td>SD</td><td>= {{$SD}} orang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>SMP</td><td>= {{$SMP}} orang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>SMA</td><td>= {{$SMA}} orang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>S1</td><td>= {{$S1}} orang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>S2</td><td>= {{$S2}} orang</td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td>S3</td><td>= {{$S3}} orang</td>
                                    </tr>
                                </table>
                                Periode Survei = 01-01-<?php echo date('Y'); ?> s/d 31-12-<?php echo date('Y'); ?>
                            </div>
                            <br>
                            <h8>
                                TERIMA KASIH ATAS PENILAIAN YANG TELAH ANDA BERIKAN <br>
                                MASUKAN ANDA SANGAT BERMANFAAT UNTUK KEMAJUAN UNIT KAMI AGAR TERUS MEMPERAIKI <br>
                                DAN MENINGKATKAN KUALITAS PELAYANAN BAGI MASYARAKAT
                            </h8>
                        </center>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times-circle"></i> Tutup</button>
                    </div>
                </div>
            </div>
        </div>

        <center>
            <a href="{{url('/data_tahun_ini')}}" class="btn btn-danger"> Daftar Taman </a>
        </center>

@endsection