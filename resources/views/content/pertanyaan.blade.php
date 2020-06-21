@extends('layout.layhome')

@section('content')

<style type="text/css">
    input{
        margin-left: 20px; 
        margin-right: 5px;
        width: 17px;
        height: 17px;
    }
</style>
      
      <center><h2 style="color: green; font-family: Arial;">
      <br>
      JAWAB PERTANYAAN SURVEI DENGAN JUJUR MENURUT ANDA
      </h2></center>


   <div class="main-content" style="padding-top: 10px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="au-card"  >
                        <form action="{{url('/kerpertanyaan')}}" enctype="multipart/form-data">
                            <input type="hidden" name="no_hp" id="no_hp" value="{{$no_hp}}">
                            <input type="hidden" name="taman_id" id="taman_id" value="{{$taman_id}}">
                            <?php
                              $no = 1; 
                            ?>  
                            @foreach ($data as $key)
                            <div style="width: 48%;display: inline-table;">
                                {{$key->NO_PERTANYAAN}}. <font>{{$key->PERTANYAAN}}<br></font>
                                <input type="radio" class="radio" value="1" name="u{{$key->NO_PERTANYAAN}}" required="">{{$key->A}}
                                <br>
                                <input type="radio" class="radio" value="2" name="u{{$key->NO_PERTANYAAN}}">{{$key->B}}
                                <br>
                                <input type="radio" class="radio" value="3" name="u{{$key->NO_PERTANYAAN}}">{{$key->C}}
                                <br>
                                <input type="radio" class="radio" value="4" name="u{{$key->NO_PERTANYAAN}}" style="margin-bottom: 15px;">{{$key->D}}
                                <br>
                            </div>
                            @endforeach
                            <br><br>
                            <input type="hidden" name="no_hp" value="{{Session::get('NO_HP')}}" style="width: 100px;">
                            <input type="hidden" name="tahun" value="<?php echo date('Y'); ?>" style="width: 100px;">
                            <button class="au-btn au-btn--block au-btn--green m-b-20">
                            </i> Submit
                            </button>
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script type="text/javascript">

    $(document).ready(function() {
    $(window).keydown(function(event){
        if(event.keyCode == 116) {
          event.preventDefault();
          return false;
        }
      });
    });


    $(document).ready(function() {
    $(window).keydown(function(event){
        if(event.keyCode == 82) {
          event.preventDefault();
          return false;
        }
      });
    });
    

    $(document).keydown(function(e){
    if(e.which === 123){
       return false;
    }
 
  });

  $(document).bind("contextmenu",function(e) { 
  e.preventDefault();

  }); 

</script>
<script type="text/javascript">
      function launchFullScreen(element) {
  if(element.requestFullScreen) {
    element.requestFullScreen();
  } else if(element.mozRequestFullScreen) {
    element.mozRequestFullScreen();
  } else if(element.webkitRequestFullScreen) {
    element.webkitRequestFullScreen();
  }
}

// Launch fullscreen for browsers that support it!
launchFullScreen(document.documentElement); // the whole page
launchFullScreen(document.getElementById("videoElement")); // any individual element
 
</script>

@endsection