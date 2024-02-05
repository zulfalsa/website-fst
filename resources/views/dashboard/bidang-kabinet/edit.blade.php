@extends('dashboard.layouts.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <!-- CONTENT -->
    <h1 class="fw-bold">Edit Anggota</h1>
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
<div class="card p-4 border-0 shadow-sm">
    <form method="post" action="/dashboard/bidang-kabinet/{{$anggota->id}}" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="mb-3">
            <label for="title" class="form-label">Nama</label>
            <input type="text" class="form-control" id="name" name="name" required value="{{$anggota->name}}">
        </div>
        <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" id="slug" name="slug" required value="{{$anggota->slug}}">
        </div>
        <div class="mb-3">
            <label for="jabatan" class="form-label">Jabatan</label>
            <input type="text" class="form-control" id="jabatan" name="jabatan" required value="{{$anggota->jabatan}}">
        </div>
        <div class="mb-3">
            <label for="category" class="form-label">Bidang</label>
            <select class="form-select" name="bidang_id">
                @foreach($bidang as $bidang)
                <option value="{{$bidang->id}}">{{$bidang->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="jurusan" class="form-label">Jurusan / Angkatan</label>
            <input type="text" class="form-control" id="jurusan" name="jurusan" required value="{{$anggota->jurusan}}">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
</div>
@endsection