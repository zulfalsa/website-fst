@extends('layouts.main')

@section('container')
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
            <a href="/">Home</a>
        </li>
        <li class="breadcrumb-item">
            <a class="d-flex text-black">{{$bidang}}</a>
        </li>
    </ol>

    <div class="card border-0 mb-4 card-blog">
        <div class="card-header border-0">
            <h1 class="fw-bold">{{$bidang}}</h1>
        </div>
        <div class="card-body">
            <div class="row">
                @foreach ($anggota as $anggota)
                <div class="col-md-6 col-xl-4 mb-4">
                    <a href="" class="card border-0 h-100 text-decoration-none">
                        <img src="{{ asset('storage/' . $anggota->image)}}" alt="" class="img-fluid"
                            style="width:300px">
                        <div class=" card-body">
                            <span class="badge badge-succes mb-2"> {{$anggota->bidang->name}}</span>
                            <h5 class="card-title fw-bold">{{ $anggota->name }}</h5>
                            <p class="card-text" style="color: #687281;">{{ $anggota->jabatan }}</p>
                        </div>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection