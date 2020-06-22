<?php

namespace App\Http\Controllers;

use Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use DB;
use App\komentar;
use App\dashboard;
use App\responden;
use App\pertanyaan;
use App\nilai;
use App\ad_taman;
use App\taman;
use App\dt_komentar;
use App\grafik_umur;
use App\hasil;
use File;

class Admin extends Controller
{

    public function login()
    {	
        return view('/content/login');
    }

    public function act_login(Request $request){
        $username = $request->user;
        $password = $request->pass;
        
        Session::flush();
        $data = DB::table('login')->where([['USERNAME',$username],['PASSWORD',$password]])->get();
        foreach ($data as $key) {
            $nama = $key->NAMA;
            $level = $key->LEVEL;
        };
        if (count($data) == 0){

            return redirect('/login')->with('error','username dan password tidak cocok !!!');
        }
        else if($level == 1) {

            Session::put('USERNAME',$username);
            Session::put('PASSWORD',$password);
            Session::put('NAMA',$nama);


            return view('/owner/dt_thi',[]);

        }else if($level == 2) {

            Session::put('USERNAME',$username);
            Session::put('PASSWORD',$password);
            Session::put('NAMA',$nama);


            return view('/admin/home',[]);
        }
    }

    public function adhome()
    {   
        return view('/admin/home');
    }

    public function dt_res()
    {   
        $data = \App\responden::
        select('*')
        ->orderby('JAM','ASC')
        ->get();
          
        return view('/admin/dt_responden',['data'=>$data]);
    }

    public function editres(Request $request,$id)
    {
        $id = $request->no_hp;
        $gen = $request->gen;
        $age = $request->age;
        $pen = $request->pen;
        $pek = $request->pek;
        $jen = $request->jen;

        $data = DB::table('responden')->where('NO_HP',$id)->update(['GENDER'=>$gen,'UMUR'=>$age,'PENDIDIKAN'=>$pen,'PEKERJAAN'=>$pek,'JENIS'=>$jen,'taman_id'=>$taman_id]);
        return redirect('/data_responden');
    }

    public function delres($id)
    {
        DB::table('responden')->where('NO_HP',$id)->delete();
        return redirect('/data_sresponden');
    }


    public function dt_pertanyaan()
    {   
        $data = \App\pertanyaan::select('*')->get();
          
        return view('/admin/dt_pertanyaan',['data'=>$data]);
    }

      public function tmbpertanyaan(Request $request)
    {
      $no = $request->no;
      $so = $request->pertanyaan;
      $a = $request->pa;
      $b = $request->pb;
      $c = $request->pc;
      $d = $request->pd;

      $data = new pertanyaan();
        $data->NO_PERTANYAAN = $no;
        $data->pertanyaan = $so;
        $data->A = $a;
        $data->B = $b;
        $data->C = $c;
        $data->D = $d;
        $data->save();

        return redirect('/data_pertanyaan');
    }

    public function editpertanyaan(Request $request,$id)
    {
        $so = $request->pertanyaan;
        $a = $request->pa;
        $b = $request->pb;
        $c = $request->pc;
        $d = $request->pd;

        $data = DB::table('pertanyaan')->where('PERTANYAAN_ID',$id)->update(['PERTANYAAN'=>$so,'A'=>$a,'B'=>$b,'C'=>$c,'D'=>$d]);
        return redirect('/data_pertanyaan');
    }


    public function dt_nilai()
    {   
        $data = \App\nilai::
        select('*')
        ->get();
          
        return view('/admin/dt_nilai',['data'=>$data]);
    }

    public function hasil(Request $request)
    {
        return 'Halo';
        // return view('/content/hasil');
    } 


    public function dt_thi()
    {            
        return view('/owner/dt_thi');
    }


    public function tmbres(Request $request)
    {
      $ni = $request->no_hp;
      $tg = $request->tgl;
      $ta = $request->tahun;
      $ja = $request->jam;
      $ge = $request->gender;
      $ag = $request->age;
      $pe = $request->pen;
      $pk = $request->pek;
      $je = $request->jen;
      $taman_id = $request->taman_id;

      $data = new responden();
        $data->NO_HP = $ni;
        $data->TGL = $tg;
        $data->TAHUN = $ta;
        $data->JAM = $ja;
        $data->GENDER = $ge;
        $data->UMUR = $ag;
        $data->PENDIDIKAN = $pe;
        $data->PEKERJAAN = $pk;
        $data->JENIS = $je;
        $data->taman_id = $taman_id;
        $data->save();

        $dato = \App\pertanyaan::
        select('*')
        ->get();

        Session::put('NO_HP',$ni);
        return view('/content/pertanyaan',['data'=>$dato, 'taman_id' => $taman_id, 'no_hp' => $ni]);
    }

    public function kerpertanyaan(Request $request)
    {   
      $ni = $request->no_hp;
      $a = $request->u1;
      $b = $request->u2;
      $c = $request->u3;
      $d = $request->u4;
      $e = $request->u5;
      $f = $request->u6;
      $g = $request->u7;
      $h = $request->u8;
      $i = $request->u9;
      $ta = $request->tahun;
      $taman_id = $request->taman_id;

      $data = new nilai();
        $data->NO_HP = $ni;
        $data->U1 = $a;
        $data->U2 = $b;
        $data->U3 = $c;
        $data->U4 = $d;
        $data->U5 = $e;
        $data->U6 = $f;
        $data->U7 = $g;
        $data->U8 = $h;
        $data->U9 = $i;
        $data->TAHUN = $ta;
        $data->taman_id = $taman_id;
        $data->save();

        return view('/content/hasil', compact('ni', 'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'ta' ,'taman_id'));
    }

    public function logout()
    {
         return redirect('/');
    }


    //DIGAE VIEW DATA TAMAN
     public function taman()
    {   
        $taman = \App\taman::all();
        return view ('admin.taman',['taman' => $taman]);
    }

    //DIGAE TAMBAH DATA TAMAN
    // public function komentar()
    // {
        
    //  $data = new \App\komentar;
    //  $komentar->kategori_layanan = $request->kategori_layanan;
    //  $komentar->ulasan = $request->ulasan;
    //  $komentar->save();
    // }

     public function create(Request $request)
    {
        if($request->file('gambar')) {
            $file = $request->file('gambar');
            $fileName  = $file->getClientOriginalName();
            $request->file('gambar')->move("foto", $fileName);
            $foto = $fileName;
        } else {
            $foto = NULL;
        }
        taman::create([
        'nama_taman'=>request('nama_taman'),
        'gambar'=>$foto,
        'fungsi'=>request('fungsi'),
        'layanan'=>request('layanan'),
        'alamat'=>request('alamat'),
        ]);
        return redirect ('/taman')->with('sukses','tambah data berhasil');
    }

   
     public function edit($taman_id)
    {
        $dttaman = DB::table('taman')->where('taman_id','=',$taman_id)->get();
        return view('admin/edit', compact('dttaman'));
    }

    //digae nyimpen edit data
       public function update(Request $request,$taman_id)
    {    
        $taman = \App\taman::where('taman_id','=',$taman_id);            
            if($request->file('gambar')) {
                $file = $request->file('gambar');
                $fileName  = $file->getClientOriginalName();
                $request->file('gambar')->move("foto", $fileName);
                File::delete('foto/',request('file_old'));
                $foto = $fileName;
            } else {
                $foto = request('file_old');
            }                            
        $taman->update([
            'nama_taman'=>request('nama_taman'),
            'gambar'=>$foto,
            'fungsi'=>request('fungsi'),
            'layanan'=>request('layanan'),
            'alamat'=>request('alamat'),
        ]);
        return redirect ('/taman')->with('sukses','update data berhasil');
    }

      //digae hapus data
        public function hapus(Request $request,$taman_id)
    {
        $taman = DB::table('taman')->where('taman_id','=',$taman_id)->get();
        foreach ($taman as $dttaman) {
            File::delete('foto/'.$dttaman->gambar);            
        }                        
        $tamans = \App\taman::where('taman_id','=',$taman_id);            
        $tamans->delete();
        return redirect ('/taman')->with('sukses','hapus data berhasil');               
    }

       //DIGAE VIEW DATA TAMAN
     public function ad_taman()
    {   
        $ad_taman = \App\ad_taman::all();
        return view ('owner.ad_taman',['ad_taman' => $ad_taman]);
    }

    public function data_umur() {
        $tamans = taman::all();
        return view('owner.data_umur', compact('tamans'));
    }
       
     public function grafik_umur($taman_id)
    {   
        // $grafik_umur = \App\grafik_umur::all();
        $grafik_umur = DB::table('taman')
                    -> join('nilai', 'nilai.taman_id', '=', 'taman.taman_id')
                    -> where('nilai.taman_id', $taman_id)
                    -> get();
        return view ('owner.grafik_umur', compact('grafik_umur'));
    }

        public function grafik_pendidikan()
    {   
        $taman = DB::table('taman')->get();
        return view ('owner.data_grafik_pendidikan',compact('taman'));
    }

    public function grafik_pekerjaan()
    {   
        $grafik_pekerjaan = \App\grafik_pekerjaan::all();
        return view ('owner.grafik_pekerjaan',['grafik_pekerjaan' => $grafik_pekerjaan]);
    }


    public function k(Request $request){
        $taman_id = $request->taman_id;
        $no_hp = $request->no_hp;

        komentar::create([
            'taman_id' => request('taman_id'),
            'no_hp' => request('no_hp'),
            'kategori_layanan' => request('kategori_layanan'),
            'ulasan' => request('ulasan'),
        ]);
        Session::flash('message', 'Berhasil ditambahkan');
        Session::flash('message_type', 'success');
        // return redirect()->route('komentar.show');
        return view('/content/hasil', ['taman_id' => $taman_id, 'ni' => $no_hp]);

        // echo $taman_id . '<br>';
        // echo $no_hp . '<br>';
        // echo 'k method';
    }

    public function komentar(Request $request) {
        $taman_id = $request->taman_id;
        $no_hp = $request->no_hp;

        komentar::create([
            'taman_id' => request('taman_id'),
            'NO_HP' => request('no_hp'),
            'kategori_layanan' => request('kategori_layanan'),
            'ulasan' => request('ulasan'),
        ]);

        Session::flash('message', 'Berhasil ditambahkan');
        Session::flash('message_type', 'success');

        return view('/content/hasil', ['taman_id' => $taman_id, 'ni' => $no_hp]);
    }

    public function data_komentar($taman_id) {
        // $komentar = taman::where('taman_id', $taman_id)->get();

        $komentars = DB::table('taman')
                    -> join('komentar', 'taman.taman_id', '=', 'komentar.taman_id')
                    -> select('taman.taman_id', 'nama_taman', 'kategori_layanan', 'ulasan')
                    -> where('taman.taman_id', $taman_id)
                    -> get();

        return view('owner.data_komentar', compact('komentars'));
    }

    public function dt_komentar(dt_komentar $dt_komentar)
    {
        $tamans = taman::all();

        return view ('owner.dt_komentar', compact('tamans'));
    }

     public function dashboard()
    {   
        $dashboard = \App\dashboard::all();
        $jmltaman = \App\taman::all();
        $jmlpertanyaan = \App\pertanyaan::all();
        return view ('owner.dashboard', compact('dashboard','jmltaman','jmlpertanyaan'));
        // return view ('owner.dashboard',['dashboard' => $dashboard]);

    }
}


