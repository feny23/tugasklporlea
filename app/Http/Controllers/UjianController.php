<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class UjianController extends Controller
{
    public function index()
    {
        
        return view('ujian.index');

    }
    public function create()
    {
        // $soals = DB::table('soal')
        // ->select('id','soal ','A','B','C','D' ORDER BY RAND ())
        $soals = DB::select('select * from soal ORDER BY RAND ()');
       
    
        return view('ujian.create',compact('soals'));  
    }
    public function store(Request $request)
    {
        
        $request->validate([
            
            'id_user' => 'required'

        ]);
        $tes = new Ujian();
        $tes->id = $request->input('id');
        $tes->id_user = $request->input('id_user');
        
        // $tes->id_soal = $request->input('id_soal');
            // $tes->jawaban = $request->input('jawaban');
            
            

            // $tes=new DetailUjian();
       
            // $tes->id_soal = $request->input('id_soal');
            // $tes->jawaban = $request->input('jawaban');
            // $tes->C = $request->input('C');
            // $tes->D = $request->input('D');
            // $tes->id_jawaban = $request->input('id_jawaban');
            // $tes->poin = $request->input('poin');
            $tes->save();
            
            return redirect('/ujian')->with('status','Soal berhasil ditambahkan!');
        

}
}