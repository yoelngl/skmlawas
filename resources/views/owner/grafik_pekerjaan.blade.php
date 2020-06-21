@extends('layout.layowner')
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
                        <div><h3 style="text-align: center;"><b>GRAFIK PEKERJAAN RESPONDEN</b></h3></div>
                        <br>

                        <div style="">
                            <canvas id="pekerjaan" style=";"></canvas>
                        </div>
                        

                    </div>

<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script>
<script  type="text/javascript">
    <?php 
    $pekerj = DB::select('SELECT PEKERJAAN, COUNT(PEKERJAAN) as per FROM `responden` GROUP BY PEKERJAAN'); 
    // $result = mysqli_query($connect, $query)    ;
    // ROUND(COUNT(TAHUN)/(SELECT COUNT(*)FROM surveiors)*100,0)
    ?>
    var ctx = document.getElementById("pekerjaan").getContext("2d");
    var data = {
            labels: [<?php foreach($pekerj as $data) { echo '"' . $data->PEKERJAAN. '",'; }?>],
            datasets: [
                {
                  label: "Penjualan Smartphone",
                  data: [<?php foreach($pekerj as $data) { echo '"' . $data->per . '",'; }?>],
                backgroundColor: [
                  "yellow",
                  "lightblue",
                  "orange",
                  "red",
                  "lightgreen",
                  "pink"]
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