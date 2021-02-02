@extends('layout')

@section('title', 'Home')
@section('subtitle', 'Hemat Pangkal Kaya')
@section('content')
    <h2 class="mb-3">Tabel anu</h2>
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
            @foreach ($data as $item)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}</td>
                    <td>{{ $item->title }}</td>
                    <td class="text-center">{{ $item->author }}</td>
                    <td class="text-center">{{ $item->views }}</td>
                    <td class="text-center"><button class="bg-green-400 px-1 text-white rounded-sm">Edit</button><button
                            class="bg-red-400 px-1 text-white rounded-sm ml-1">Delete</button></td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
