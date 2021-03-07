@extends('layout')

@section('title', 'Create')
@section('subtitle', 'Create Data')
@section('content')
    <table class="table-fixed bg-white p-3 block rounded-3xl">
        <thead>
            <tr>
                <th class="w-6/12">Title</th>
                <th class="w-1/12 text-center">Author</th>
                <th class="w-1/12 text-center">Email</th>
                <th class="w-1/12 text-center">Views</th>
                <th class="w-3/12 text-center">Action</th>
            </tr>
        </thead>
        <tbody>
            <form method="POST" action="/datas">
                @csrf
                <tr>
                    <td class="text-center">
                        <input type="text" name="title" id="" placeholder="Masukkan Title" required>
                    </td>
                    <td class="text-center">
                        <input type="text" name="author" id="" placeholder="Masukkan Author" required>
                    </td>
                    <td class="text-center">
                        <input type="email" name="email" id="" placeholder="Masukkan Email" required>
                    </td>
                    <td class="text-center">
                        <input type="number" name="views" id="" placeholder="Masukkan Views" required>
                    </td>
                    <td class="text-center">
                        <button type="submit"
                            class="bg-primary px-2 text-white rounded-sm mx-1 py-1 leading-5">Save</button>
                        <a href="{{ url('/datas') }}" class="px-2 rounded-sm py-1">Back</a>
                    </td>
                </tr>
            </form>
        </tbody>
    </table>
@endsection
