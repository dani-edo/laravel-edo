@extends('layout')

@section('title', 'Home')
@section('subtitle', 'Hemat Pangkal Kaya')
@section('content')
    <div class="flex">
        <h2 class="mb-3">Tabel Datas</h2>
        <a href="{{ url('/datas/create') }}" class="ml-auto mb-1 bg-primary text-white px-2 py-1 rounded">Create Data</a>
    </div>
    <table class="table-fixed bg-white p-3 block rounded-3xl">
        <thead>
            <tr>
                <th class="w-1/12 text-center">No</th>
                <th class="w-6/12">Title</th>
                <th class="w-1/12 text-center">Author</th>
                <th class="w-1/12 text-center">Email</th>
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
                    <td class="text-center">{{ $item->email }}</td>
                    <td class="text-center">{{ $item->views }}</td>
                    <td class="text-center">
                        <a href="{{ url("/datas/$item->id") }}"
                            class="bg-green-400 px-2 text-white rounded-sm py-1">View</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
