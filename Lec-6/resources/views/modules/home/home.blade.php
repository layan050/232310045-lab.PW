@extends('templates.layouts')
@section('content')

{{-- Load Bootstrap CSS --}}
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">

{{-- Load Bootstrap Icons --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

{{-- (Opsional) Load Local CSS jika perlu --}}
{{-- <link rel="stylesheet" href="{{ url('./assets/css/bootstrap.min.css') }}"> --}}

{{-- Load Bootstrap JS --}}
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>

<div class="bg-danger d-flex align-items-center p-3 my-3 text-white rounded shadow-sm ">
    <img class="me-3" src={{ url("https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/LOGO_IBIK.png/1200px-LOGO_IBIK.png ") }} alt="icon-ibik" width="45" height="45">
    <div class="lh-1">
        <h1 class="h6 mb-0 text-white lh-1">Bootstrap</h1>
        <small>Since 2011</small>
    </div>
</div>

<div class="card">
    <div class="card-header">
        <h3 class="card-title">This is a HOME page</h3>
    </div>
    <div class="card-body">
        {{$title}}
       
</div>
    </div>
</div>

@endsection