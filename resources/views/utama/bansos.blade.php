@extends('utama.layouts.master')

@section('content')
    <div class="box6">
        <div class="row p-3 justify-content-center">
            <h1 class="text-center"  style="font-family: Lucida Sans">Daftar Penerima Bantuan Sosial</h1>
            <hr class="my-1">

            <div class="card mt-3">
                <div class="card-body p-2 ">
                    <div class="table-responsive">
                        <table class="table text-center table-striped table-borderless mb-1" id="tabel-bansos">
                            <thead>
                                <tr>
                                    <th class="table-plus datatable-nosort">No</th>
                                    <th>Nama Penerima</th>
                                    <th>NIK</th>
                                    <th>Jenis Kelamin</th>
                                    <th>Dusun</th>
                                    <th>Jenis Bantuan</th>
                                    <th>Keterangan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bantuans as $bantuan)
                                    <tr>
                                        <td class="table-plus">{{ $loop->iteration }}</td>
                                        <td>{{ $bantuan->penduduk->nama_penduduk}}</td>
                                        <td>{{ $bantuan->penduduk->nik_penduduk}}</td>
                                        <td>{{ $bantuan->penduduk->jk_penduduk}}</td>
                                        <td>{{ $bantuan->penduduk->dusun->nama_dusun }}</td>
                                        <td>{{ $bantuan->jenis_bantuan->nama_bansos }}</td>
                                        <td>{{ $bantuan->ket_bansos }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
