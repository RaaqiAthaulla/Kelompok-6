@extends('layouts.main')
@section('container')
<body style="background-color: black;">
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
  <h1 class="h2">Welcome, {{ auth()->user()->name }}</h1>
</div>
  <div class="container-fluid banner">
     <div class="container banner-content col-lg-20">
     <a href="#">
       <img class="img-fluid" src="https://i.pinimg.com/originals/10/0e/40/100e40496828d3aff5f25586879cd7cd.jpg" style="width:1200px" > 
       <div>
         <p class="fs-1"></p>
       </div>
    </div> 
    </a>
    <h1 id="home">Popular on Netflix</h1>
      @foreach ($veflix as $movies)
        <div class="d-flex d-inline pt-3">
                <a href="/veflix/{{ $movies->id }}/detail">
                    <img class="rounded mx-auto d-block img-fluid" src="{{ asset('/storage/image/' . $movies->image)}}" alt="{{ $movies->image }}" width="200" height="300">
                </a> 
        </div>
        @endforeach
@endsection
</body>
