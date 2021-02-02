@extends('layout')

@section('title', 'Home')
@section('subtitle', 'Hemat Pangkal Kaya')
@section('content')
    <h2 class="mb-3">Tabel anu</h2>
    <table class="table-fixed bg-white p-3 block rounded-3xl">
        <thead>
            <tr>
                <th class="w-1/2">Title</th>
                <th class="w-1/6 text-center">Author</th>
                <th class="w-1/6 text-center">Views</th>
                <th class="text-center w-1/6">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Intro to CSS</td>
                <td class="text-center">Adam</td>
                <td class="text-center">858</td>
                <td class="text-center"><button class="bg-green-400 px-1 text-white rounded-sm">Edit</button><button class="bg-red-400 px-1 text-white rounded-sm ml-1">Delete</button></td>
            </tr>
            <tr>
                <td>A Long and Winding Tour of the History of UI Frameworks and Tools and the Impact on Design</td>
                <td class="text-center">Adam</td>
                <td class="text-center">112</td>
                <td class="text-center"><button class="bg-green-400 px-1 text-white rounded-sm">Edit</button><button class="bg-red-400 px-1 text-white rounded-sm ml-1">Delete</button></td>
            </tr>
            <tr>
                <td>Intro to JavaScript</td>
                <td class="text-center">Chris</td>
                <td class="text-center">1,280</td>
                <td class="text-center"><button class="bg-green-400 px-1 text-white rounded-sm">Edit</button><button class="bg-red-400 px-1 text-white rounded-sm ml-1">Delete</button></td>
            </tr>
        </tbody>
    </table>
@endsection
