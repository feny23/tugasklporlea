<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\DetailUjian;

class HasilUjianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ujians = DB::table('ujian')
            ->join('users', 'ujian.id_user', '=', 'users.id')
            ->join('detail_ujian', 'detail_ujian.id', '=', 'ujian.id')
            ->select('ujian.*', 'users.name','detail_ujian.poin')
            ->where('detail_ujian.poin','=',NULL)
            ->distinct()
            ->get();


            return view('hasilujian.index', compact('ujians'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'poin' => 'required'
           

        ]);
        $semhas = new detail_ujian();
            $semhas->poin = $request->input('poin');
         
            $semhas->save();
      
       
        return redirect('/soal')->with('status','Soal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ujians = DB::table('detail_ujian')
        ->join('ujian', 'ujian.id', '=', 'detail_ujian.id')
        ->join('users', 'users.id', '=', 'ujian.id_user')
        ->select('ujian.id','users.name',DB::raw('SUM(detail_ujian.poin) as poin'))
        ->distinct()
        
        ->get();

        return view('hasilujian.show', compact('ujians'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ujians = DB::table('detail_ujian')
        ->join('soal', 'soal.id', '=', 'detail_ujian.id_soal')
        ->select('detail_ujian.*', 'soal.soal')
        ->where('detail_ujian.id','=',$id)
        ->get();

        return view('hasilujian.edit', compact('ujians','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
        public function update(Request $request, DetailUjian $ujians)
        {
            DetailUjian::where('id',$ujians->id)
            ->update([
                'poin' => $request->poin
            ]);
            return redirect('/hasilujian')->with('status','Nilai berhasil diinputkan!');
    
        }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
