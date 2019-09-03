@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row justify-content-center">
    <ul class="list-group">
  <li class="list-group-item active">Dasboard</a></li>
  <li class="list-group-item"><a href="{{ url('/soal') }}">Soal</a></li>
  <li class="list-group-item"><a href="{{ url('/hasilujian/show') }}">Data nilai</a></li>
  <li class="list-group-item"><a href="{{ url('/hasilujian') }}">PeriksaUjian</a></li>
</ul>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!
                    <div class="top-right links">
                   
                       
                        <a href="{{ url('/ujian/create') }}">Take test</a>
                   
                        

                

                     
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
