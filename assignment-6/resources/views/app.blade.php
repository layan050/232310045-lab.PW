{{-- File: resources/views/layouts/app.blade.php --}}
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Laravel App')</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            background-color: #f5f5f5;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f8f9fa;
            font-weight: bold;
        }
        .stars {
            font-size: 20px;
            letter-spacing: 2px;
        }
        .star-filled { 
            color: #ffc107; 
            text-shadow: 1px 1px 2px rgba(0,0,0,0.3);
        }
        .star-empty { 
            color: #e0e0e0; 
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        tr:hover {
            background-color: #f8f9fa;
        }
    </style>
</head>
<body>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>

{{-- File: resources/views/profile.blade.php --}}
@extends('layouts.app')

@section('title', 'Profile - Skills')

@section('content')
<h1>Profile - Academic Skills</h1>

<table>
    <thead>
        <tr>
            <th>Course</th>
            <th>Type</th>
            <th>Rate</th>
        </tr>
    </thead>
    <tbody>
        @foreach($skills as $skill)
        <tr>
            <td>{{ $skill['course'] }}</td>
            <td>{{ $skill['type'] }}</td>
            <td class="stars">
                @for($i = 1; $i <= 5; $i++)
                    @if($i <= $skill['rate'])
                        <span class="star-filled">★</span>
                    @else
                        <span class="star-empty">☆</span>
                    @endif
                @endfor
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

<div style="margin-top: 20px;">
    <h3>Raw Data (for debugging):</h3>
    <pre>{{ print_r($skills, true) }}</pre>
</div>
@endsection