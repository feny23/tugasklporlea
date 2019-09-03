@extends('layouts.app')
@section('content')
<h3>Soal-soal</h3>


@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div> 
@endif
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">Nomor</th>
<th scope="col">Nama Peserta</th>
<th scope="col">Periksa</th>
</tr>
</thead>
<tbody>
@foreach($ujians as $ujian)
<tr>
<th scope="row">{{ $loop->iteration }}</th>
<td>{{ $ujian->name }}</td>
<td>
<a href="/hasilujian/{{ $ujian->id }}/edit" class="badge badge-warning">Periksa</a>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
@endsection
