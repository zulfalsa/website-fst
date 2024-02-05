@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <!-- CONTENT -->
    <h1 class="fw-bold">My Posts</h1>
    <!-- ENDCONTENT -->

    <!-- SIDEBAR -->
    <ul class="navbar-nav ms-auto">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Welcome back, {{auth()->user()->name}}!
            </a>
            <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="/">Back to Web</a></li>
                <li>
                    <hr class="dropdown-divider">
                </li>
                <li>
                    <form action="/logout" method="post">
                        @csrf
                        <button type="submit" class="dropdown-item">Logout</button>
                    </form>
                </li>
            </ul>
        </li>
    </ul>
    <!-- SIDEBAR END -->
</div>

<div class="card px-4 border-0 shadow-sm">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="card border-0 h-100 text-decoration-none">
                    <img src="{{ asset('storage/' . $post->image)}}" alt="" width="300px">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        {!! $post->body !!}
                        <p class="card-text"><small class="text-muted">Author: Admin</small></p>
                    </div>
                    <div class="card-footer border-0">
                        <p class="text-muted">Diunggah : {{$post->created_at->format('l, F j, Y')}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<canvas class="my-4 w-100" id="myChart" width="900" height="380">
</canvas>

@endsection