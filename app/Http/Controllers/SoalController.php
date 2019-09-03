<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Soal;

class SoalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $soals = DB::table('soal')->get();
        return view('soal.index', compact('soals'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
       
    
        return view('soal.create');  
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
            'soal' => 'required'
           

        ]);
        $semhas = new Soal();
            
            $semhas->soal = $request->input('soal');
         
            $semhas->save();
      
       
        return redirect('/soal')->with('status','Soal berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Soal $soal)
    {

        return view('soal.show',compact('soal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Soal $soal)
    {
       
        return view('soal.edit',compact('soal'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Soal $soal)
    {
        Soal::where('id',$soal->id)
        ->update([
            'soal' => $request->soal
        ]);
        return redirect('/soal')->with('status','Soal berhasil diubah!');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Soal $soal)
    {
        Soal::destroy($soal->id);
        return redirect('/soal')->with('status','Soal berhasil dihapus!');

    }
}
