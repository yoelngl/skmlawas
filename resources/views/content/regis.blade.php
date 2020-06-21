@extends('layout.layhome')
<style type="text/css">
table tr td {
    padding: 5px;
    font-weight: bold;
    color: black;
}
label{
    padding-top: 5px;
    font-weight: bold;
    color: black;
}
.rad{
    width: 20px;
    height: 20px;
}
.fon{
    font-style: italic;
    color: black;
    font-weight: bold;
    font-family: times new roman;
}
.no_hp{
    padding: 5px 10px 5px 10px;
    width: 180px;
}
</style>
@section('content')
	   <div class="page-wrapper">
        <div class="page-content--bge5"style="margin-bottom: -75.6px;background-image: url(assets/images/5.jpg);background-size: 100% 100%;">
            <br>
            <br>
            <center><h3 style="color: green; font-family: Arial;">PADA UNIT LAYANAN DINAS DLKHP KOTA KEDIRI TAHUN <?php echo date('Y'); ?></h3></center>
            <br>
            <div class="container">
                <form action="{{url('/addres')}}" enctype="multipart/form-data">
                <center>
                <div class="login-content" style="background: ;width: 1100px;">
                    <div class="">
                        <table style="width: 100%;">
                            <tr>
                                <td><label>Tanggal Survei</label></td>
                                <td><label>:</label></td>
                                <td><input type="text" style="border-radius: 0px;padding: 5px 10px 5px 10px;background: none;cursor: auto;" name="tgl" value="<?php echo date('Y-m-d'); ?>" readonly></td>
                                <td></td>
                                <td><label>Jam Survei</label></td>
                                <td><label>:</label></td>
                                <td>
                                    <input class="rad" type="radio" name="jam" <?php if (isset($jam) && $jam=="13:00 - 17:00") echo "checked";?> value="08:00" required> <label>08:00 - 12:00</label>
                                </td>
                                <br>
                                <td>
                                    <input class="rad" type="radio" name="jam" <?php if (isset($jam) && $jam=="08:00 - 12:00") echo "checked";?> value="13:00"> <label>13:00 - 17:00</label>
                                </td> 
                            </tr>
                            <tr>
                                <td><input type="hidden" name="tahun" value="<?php echo date('Y'); ?>"></td>
                            </tr>
                        </table>
                    </div>
                    <div class="login-form">
                        <hr style="border: 1px solid;">
                        <center><h3 style="font-family: times new roman;color: black;">PROFIL</h3></center>
                        <br>
                        
                        <table style="width: 100%">
                            <tr>
                                <td>No Hp</td>
                                <td width="10">:</td>
                                <td><input  type="number" name="no_hp" class="no_hp" autocomplete="off" required=""></td>
                               
                                <td>Jenis Kelamin</td>
                                <td>:
                                   <input class="rad" type="radio" name="gender" <?php if (isset($gender) && $gender=="L") echo "checked";?> value="L" required> 
                                    <label>L</label>
                                </td>
                                <td> 
                                    <input class="rad" type="radio" name="gender" <?php if (isset($gender) && $gender=="P") echo "checked";?> value="P"> 
                                    <label>P</label>
                                </td>
                                <td style="text-align: right;">Usia :</td>
                                <td style=" width: 150px;">
                                    <input class="border" type="number" style="padding: 5px 10px 5px 10px;width: 90px;" name="age" min="15" required=""> Th</td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td width="10">:</td>
                                <td>
                                    <input class="rad" type="radio" name="pen" <?php if (isset($pen) && $pen=="13:00 - 17:00") echo "checked";?> value="SD" required> 
                                    <label>SD</label>
                                </td>
                                <td>
                                    <input class="rad" type="radio" name="pen" <?php if (isset($pen) && $pen=="13:00 - 17:00") echo "checked";?> value="SMP"> 
                                    <label>SMP</label>
                                </td>
                                <td>
                                    <input class="rad" type="radio" name="pen" <?php if (isset($pen) && $pen=="13:00 - 17:00") echo "checked";?> value="SMA"> 
                                    <label>SMA</label>
                                </td>
                                <td>
                                    <input class="rad" type="radio" name="pen" <?php if (isset($pen) && $pen=="13:00 - 17:00") echo "checked";?> value="S1"> 
                                    <label>S1</label>
                                </td>
                                <td>
                                    <input class="rad" type="radio" name="pen" <?php if (isset($pen) && $pen=="13:00 - 17:00") echo "checked";?> value="S2"> 
                                    <label>S2</label>
                                </td>
                                <td>
                                    <input class="rad" type="radio" name="pen" <?php if (isset($pen) && $pen=="13:00 - 17:00") echo "checked";?> value="S3"> 
                                    <label>S3</label>
                                </td>
                            </tr> 
                            <tr>
                                <td>Pekerjaan</td>
                                <td width="10">:</td>
                                <td>
                                    <input class="rad" type="radio" name="pek" <?php if (isset($pek) && $pek=="13:00 - 17:00") echo "checked";?> value="PNS" required> 
                                    <label>PNS</label>
                                </td>
                                <td>
                                    <input class="rad" type="radio" name="pek" <?php if (isset($pek) && $pek=="13:00 - 17:00") echo "checked";?> value="TNI"> 
                                    <label>TNI</label>
                                </td>
                                <td>
                                    <input class="rad" type="radio" name="pek" <?php if (isset($pe) && $pek=="13:00 - 17:00") echo "checked";?> value="POLRI"> 
                                    <label>POLRI</label>
                                </td>
                                <td>
                                    <input class="rad" type="radio" name="pek" <?php if (isset($pek) && $pek=="13:00 - 17:00") echo "checked";?> value="SWASTA"> 
                                    <label>SWASTA</label>
                                </td>
                                <td style="width: 150px;">
                                    <input class="rad" type="radio" name="pek" <?php if (isset($pek) && $pek=="13:00 - 17:00") echo "checked";?> value="WIRASWASTA"> 
                                    <label>WIRASWASTA</label>
                                </td>
                                <td>
                                    <input class="rad" type="radio" name="pek" <?php if (isset($pek) && $pek=="13:00 - 17:00") echo "checked";?> value="LAINNYA"> 
                                    <label>LAINNYA</label>
                                </td>
                            </tr>
                        </table>

                    <label>Nama Taman
                            <select class="taman_id" name="taman_id" style="border;width: 210px;" required>
                                <option>(Nama Taman)</option>
                                <?php
                                $query = DB::table('taman')
                                ->get();
                                ?>   
                                @foreach($query as $taman)
                                <option value="{{$taman->taman_id}}"->{{$taman->nama_taman}}</option>
                                @endforeach
                            </select> 
                        </label> : 

                        <label>Jenis Layanan yang diterima 
                            <select class="no_hp" name="jen" style="border;width: 210px;" required>
                                <option>Peminjaman Taman</option>    
                                <option>Penggunaan Sarpras</option>    
                                <option>Layanan Wifi</option>   
                            </select> 
                        </label> : 
                     
                        <br>
                        <button class="au-btn au-btn--block au-btn--green m-b-20" style="margin-top: 10px " type="submit">simpan</button>
                    </div>  
                </div>
                </center>
                </form>
            </div>
        </div>

    </div>

	  

@endsection