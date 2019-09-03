@extends('layouts.app')
@section('content')
<form method="POST" action="/hasilujian/{{ $id }}">
@method('patch')
@csrf
<!-- <div class="form-group">
    <label for="id">Id ujian</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="soal" name="id">
  </div> -->
  <!-- @foreach($ujians as $ujian)
  <div class="">
    
    <label>Soal:</label>
    {{ $ujian->soal }} 
 </div>
 <div class="">
    
 <label>Jawaban:</label> 
  {{ $ujian->jawaban }} 
 </div>
 <div class="">
    
    <label>Poin</label> 
    <input type="number">
    </div>
  
  @endforeach
 
  <button type="submit">Jawab</button>

</form> -->
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">Nomor</th>
<th scope="col">Soal</th>
<th scope="col">Jawaban</th>
<th scope="col">Poin</th>
</tr>
</thead>
<tbody>
@foreach($ujians as $ujian)
<tr>
<th scope="row">{{ $loop->iteration }}</th>
<td>{{ $ujian->soal }}</td>
<td>{{ $ujian->jawaban }}</td>
<td><input type="number" name="poin"></td>
<td>
</td>
</tr>
@endforeach
<tr>
<td></td>
<td></td>
<td></td>
<td><form action="/hasilujian" method="post">
@csrf
<button type="submit">Tambah</button>
</form></td>
</tr>
</tbody>
</table>
@endsection