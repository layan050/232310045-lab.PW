@extends('layouts.app') 

@section('title', 'Data Skill Akademik Saya') 
@section('header_title', 'Profil Akademik') 

@section('content') 
    <h2 class="text-3xl font-semibold mb-6 text-center text-blue-700">Tabel Skill Akademik</h2>

    @if(count($skillAkademikData) > 0)
        <div class="overflow-x-auto relative shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                    <tr>
                        <th scope="col" class="py-3 px-6">Course</th>
                        <th scope="col" class="py-3 px-6">Type</th>
                        <th scope="col" class="py-3 px-6">Rate</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($skillAkademikData as $skill)
                        <tr class="bg-white border-b hover:bg-gray-50">
                            <td class="py-4 px-6">{{ $skill['course'] }}</td>
                            <td class="py-4 px-6">{{ $skill['type'] }}</td>
                            <td class="py-4 px-6">
                               
                                @for ($i = 0; $i < $skill['rate']; $i++)
                                    <span class="text-yellow-400 star">⭐</span>
                                @endfor
                        
                                {{-- @for ($i = 0; $i < (5 - $skill['rate']); $i++)
                                    <span class="text-gray-300 star">⭐</span>
                                @endfor --}}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <p class="text-center text-gray-600 mt-8">Tidak ada data skill akademik yang tersedia.</p>
    @endif
@endsection