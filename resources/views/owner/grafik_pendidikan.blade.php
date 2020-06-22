@extends('layout.layowner')

@section('title')
Detail Grafik Pendidikan
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
                        <div><h3 style="text-align: center;"><b>GRAFIK PENDIDIKAN RESPONDEN</b></h3></div>
                        <?php foreach ($tam as $tamm): ?>
                       <h4 class="text-center">{{$tamm->nama_taman}}</h4>
                          
                        <?php endforeach ?>
                        <br>

                        <div style="">
                            <canvas id="pendidikan" style=""></canvas>
                        </div>
                    
                    </div>


                  
 
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script  type="text/javascript">


    <?php 
    // $pen = DB::select('SELECT PENDIDIKAN , COUNT(PENDIDIKAN) as jum_p FROM responden GROUP BY PENDIDIKAN'); 
    // $result = mysqli_query($connect, $query)    ;?>
    var ctx = document.getElementById("pendidikan").getContext("2d");
    var data = {
            labels: [<?php foreach($pen as $dat) { echo '"' . $dat->PENDIDIKAN. '",'; }?>],
            datasets: [
                {
                  label: "Penjualan Smartphone",
                  data: [<?php foreach($pen as $dat) { echo '"' . $dat->jum_p . '",'; }?>],
                backgroundColor: [
                  "lightblue",
                  "purple",
                  "red",
                  "pink",
                   "orange",
                  "green"]
                }
                ]
        };

    var myBarChart = new Chart(ctx, {
        type: 'pie',
        data: data,
        options: {
        responsive: true
      }
    });
</script>
    
@endsection
