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
                        <div><h3 style="text-align: center;"><b>GRAFIK RESPONDEN UMUR</b></h3></div>
                        <h4 class="text-center">{{$grafik_umur[0]->nama_taman}}</h4>
                        <br>
                        <div style="">
                            <canvas id="age" style=""></canvas>
                        </div>
                       
                    </div>


             
<script src="{{ asset('js/chart.js') }}"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.js"></script> -->
<script  type="text/javascript">


 <?php 
    $umur1 = DB::select("SELECT COUNT(UMUR) as per FROM `responden` where umur BETWEEN '15' and '20' and taman_id = " . $grafik_umur[0]->taman_id . " "); 
    foreach ($umur1 as $data1) {
        $hasil1 = $data1->per;
    }
    $umur2 = DB::select("SELECT COUNT(UMUR) as per FROM `responden` where umur BETWEEN '21' and '30' and taman_id = " . $grafik_umur[0]->taman_id . " ");
    foreach ($umur2 as $data2) {        
        $hasil2 = $data2->per;
    }
    $umur3 = DB::select("SELECT COUNT(UMUR) as per FROM `responden` where umur BETWEEN '31' and '40' and taman_id = " . $grafik_umur[0]->taman_id . " ");
    foreach ($umur3 as $data3) {        
        $hasil3 = $data3->per;
    }
    $umur4 = DB::select("SELECT COUNT(UMUR) as per FROM `responden` where umur BETWEEN '41' and '80' and taman_id = " . $grafik_umur[0]->taman_id . " ");
    foreach ($umur4 as $data4) {        
        $hasil4 = $data4->per;
    }
    // $result = mysqli_query($connect, $query)    ;
    // ROUND(COUNT(TAHUN)/(SELECT COUNT(*)FROM surveiors)*100,0)
    ?>
    var ctx = document.getElementById("age").getContext("2d");
    var data = {
            labels: ['umur 15 - 20','umur 21 - 30','umur 31 - 40','umur 41 - 80'],
            datasets: [
                {
                  label: "Penjualan Smartphone",
                  data: [{{$hasil1}},{{$hasil2}},{{$hasil3}},{{$hasil4}}],
                backgroundColor: [
                  "green",
                  "lightblue",
                  "orange",
                  "red",
                  "lightgreen",
                  "purple",
                  "brown",
                  "black",
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


<a href="{{url('/data_umur')}}" class="btn btn-success" style="margin: auto;"> Kembali </a>
    
@endsection