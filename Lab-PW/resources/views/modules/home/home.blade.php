@extends('templates.layouts')
@section('content')

<div class="d-flex align-items-center p-3 my-3 text-white bg-danger rounded shadow-sm">
<img class="me-3" src="{{ url('https://upload.wikimedia.org/wikipedia/commons/thumb/6/6c/LOGO_IBIK.png/1200px-LOGO_IBIK.png') }}" alt="icon-ibik"
width="45" height="45">
<div class="lh-1">
<h1 class="h6 mb-0 text-white lh-1">Bootstrap</h1>
<small>Since 2011</small>
</div>
</div>
<div class="card">
<div class="card-header">
<h3 class="card-title">{{$data['title']}}</h3>
</div>
<div class="card-body">
{{-- {{$title}}
<br>
{{$description}} --}}
<p>NPM {{$data['npm']}} termasuk bilangan
{{-- @if ($data['npm'] % 2 == 0) 
    <span class="text-primary">GENAP</span>
@else 
    <span class="text-info">GANJIL</span>
@endif --}}

@switch($data['npm'] % 2)
    @case(0)
        <span class="text-primary">GENAP</span>
        @break
    @default
        <span class="text-info">GANJIL</span>   
@endswitch
</p>
</div>
</div>
    
@endsection