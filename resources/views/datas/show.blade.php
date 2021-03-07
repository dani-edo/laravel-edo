@extends('layout')

@section('title', 'Detail')
@section('subtitle', 'Detail Mahasiswa')
@section('content')
    <h2 class="mb-3">Tabel Detail</h2>
    <table class="table-fixed bg-white p-3 block rounded-3xl">
        <thead>
            <tr>
                <th class="w-1/12 text-center">No</th>
                <th class="w-6/12">Title</th>
                <th class="w-1/12 text-center">Author</th>
                <th class="w-1/12 text-center">Views</th>
                <th class="w-3/12 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="text-center">{{ $data->id }}</td>
                <td>{{ $data->title }}</td>
                <td class="text-center">{{ $data->author }}</td>
                <td class="text-center">{{ $data->views }}</td>
                <td class="text-center">
                    <a href="{{ url('/datas/1') }}" class="bg-green-400 px-2 text-white rounded-sm py-1">Edit</a>
                    <button class="bg-red-400 px-2 text-white rounded-sm mx-1 py-1 leading-5">Delete</button>
                    <a href="{{ url('/datas') }}" class="px-2 rounded-sm py-1">Back</a>
                </td>
            </tr>
        </tbody>
    </table>
@endsection
