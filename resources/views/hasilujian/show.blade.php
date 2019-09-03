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
<th scope="col">Nilai</th>
</tr>
</thead>
<tbody>
@foreach($ujians as $ujian)
<tr>
<th scope="row">{{ $loop->iteration }}</th>
<td>{{ $ujian->name }}</td>
<td>{{ $ujian->poin }}</td>

</form>
</td>
</tr>
@endforeach
</tbody>
</table>
@endsection
