@extends('layouts.app')
@section('content')
<form method="POST" action="/soal/{{ $soal->id }}">
@method('patch')
@csrf
<!-- <div class="form-group">
    <label for="id">Id Soal</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="soal" name="id" value="{{ $soal->id }} ">
  </div> -->
  <div class="form-group">
    <label for="soal">Soal</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="soal" name="soal" value="{{ $soal->soal }} ">
  </div>
  <button type="submit">Tambah soal</button>

</form>
@endsection