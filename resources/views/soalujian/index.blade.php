@extends('layouts.app')
@section('content')
<h3>Soal-soal</h3>

<a href="/soal/create">Tambah data</a>

@if (session('status'))
<div class="alert alert-success">
{{session('status')}}
</div> 
@endif
<table class="table">
<thead class="thead-dark">
<tr>
<th scope="col">Nomor</th>
<th scope="col">Soal</th>
<th scope="col">Aksi</th>
</tr>
</thead>
<tbody>
@foreach($soals as $soal)
<tr>
<th scope="row">{{ $loop->iteration }}</th>
<td>{{ $soal->soal }}</td>
<td>
<a href="/soalujian/{{ $soal->id }}">Lihat</a>
<a href="/soalujian/{{ $soal->id }}/edit" class="badge badge-warning">Edit</a>
<form action="/soal/{{$soal->id}}" method="post">
@method('delete')
@csrf
<button type="submit">Delete</button>
</form>
</td>
</tr>
@endforeach
</tbody>
</table>
@endsection
