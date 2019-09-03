@extends('layouts.app')
@section('content')
<form method="POST" action="/ujian">
@csrf
<!-- <div class="form-group">
    <label for="id">Id ujian</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="soal" name="id">
  </div> -->
  <div class="form-group">
    <label for="id">Peserta</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="soal" name="id" >
  </div>
  <div class="form-group">
    <label for="id">Peserta</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="soal" name="id_user" hidden values="{{ Auth::user()->id }}">{{ Auth::user()->name }} 
  </div>
  
  @foreach($soals as $soal)
  <div class="">
    
    
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="soal" name="id_soal" hidden value="{{ $soal->id }} ">{{ $soal->soal }} 
 </div>
 
  <div class="form-group">   
    <label for="a">Jawab</label>
    <textarea row="5" cols="30" name="jawaban" class="form-control"></textarea>
  </div>
  
  @endforeach
 
  <button type="submit">Jawab</button>

</form>
@endsection