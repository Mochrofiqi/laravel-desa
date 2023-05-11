@extends('admin.layouts.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Profile</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>

        <div style="background-color: white">
            <div class="p-3">
                <h2 class="text-center">Profile</h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-10">
                    <table class="table table-bordered border-dark">
                        <thead class="table-dark text-center fs-6">
                            <tr>
                                <th>Keterangan</th>
                                <th>Identitas Profile</th>
                            </tr>
                        </thead>
                        <tbody class="text-center fs-6">
                            <tr>
                                <td>Foto</td>
                                <td>
                                    @if (auth()->user()->foto)
                                        <img src="{{ asset('storage/' . auth()->user()->foto ) }}" alt="image" width="60" class="m-1">
                                    @else
                                        <img src="/img/slide/kosong.png" alt="image" width="60" class="m-1">
                                    @endif
                                </td>
                            </tr>
                            <tr>
                                <td>Username</td>
                                <td>{{ auth()->user()->username }}</td>
                            </tr>
                            <tr>
                                <td>Nama</td>
                                <td>{{ auth()->user()->nama }}</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>{{ auth()->user()->jeniskelamin }}</td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td>{{ auth()->user()->telepon }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>{{ auth()->user()->email }}</td>
                            </tr>

                        </tbody>
                    </table>
                    <div class="text-center pb-3">
                        <a href="/profile/edit" class="btn btn-warning p-2">Edit Profile</a>
                    </div>
                </div>
            </div>
        </div>

    </main>
@include('sweetalert::alert')

@endsection
