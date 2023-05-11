@extends('admin.layouts.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Pelayanan KTP</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>

        <div style="background-color: white">
            <div class="p-3">
                <h2 class="text-center">Data Pelayanan KTP</h2>

                <hr class="bg-secondary">
                <div class="">
                    <a href="/ktp/create" class="btn btn-success"><strong>Tambah Data Pelayanan KTP</strong></a>
                </div>

                {{-- <div class="row justify-content-end">
                    <div class="col-md-3">
                        <div class="input-group text-dark">
                            <input type="text" class="form-control" placeholder="Pencarian.." name="search" id="myInput"
                                onkeyup="myFunction()">

                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="table-responsive p-3">
                <table  id="myTable" class="table table-secondary table-striped text-center ">
                    <thead class="header">
                        <tr>
                            <th class="table-plus datatable-nosort">No</th>
                            <th>Nama Lengkap</th>
                            <th>NIK</th>
                            <th>TTL</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Gol Darah</th>
                            <th>Agama</th>
                            <th>Status</th>
                            <th>Pekerjaan</th>
                            <th>Kewarganegaraan</th>
                            <th>KK</th>
                            <th>Foto</th>
                            <th>TTD</th>
                            <th>Keterangan</th>
                            <th>KTP</th>
                            <th>File</th>
                            @can('admin')
                                <th>Setting</th>
                            @endcan

                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($ktps as $ktp)
                            <tr>
                                <td class="table-plus">{{ $loop->iteration }}</td>
                                <td>{{ $ktp->penduduk->nama_penduduk }}</td>
                                <td>{{ $ktp->penduduk->nik_penduduk }}</td>
                                <td>{{ $ktp->penduduk->ttl_penduduk }}</td>
                                <td>{{ $ktp->penduduk->jk_penduduk }}</td>
                                <td>{{ $ktp->penduduk->alamat_penduduk }}</td>
                                <td>{{ $ktp->darah }}</td>
                                <td>{{ $ktp->penduduk->agama }}</td>
                                <td>{{ $ktp->status }}</td>
                                <td>{{ $ktp->pekerjaan }}</td>
                                <td>{{ $ktp->kewarganegaraan }}</td>
                                <td>
                                    @if ($ktp->kk)
                                        <img src="{{ asset('storage/' . $ktp->kk) }}" alt="image" width="50">
                                    @else
                                        <img src="/img/slide/kosong.png" alt="image" width="45">
                                    @endif
                                </td>
                                <td>
                                    @if ($ktp->foto_ktp)
                                        <img src="{{ asset('storage/' . $ktp->foto_ktp) }}" alt="image" width="50">
                                    @else
                                        <img src="/img/slide/kosong.png" alt="image" width="45">
                                    @endif
                                </td>
                                <td>
                                    @if ($ktp->ttd_ktp)
                                        <img src="{{ asset('storage/' . $ktp->ttd_ktp) }}" alt="image" width="50">
                                    @else
                                        <img src="/img/slide/kosong.png" alt="image" width="45">
                                    @endif
                                </td>
                                <td>{{ $ktp->ket_ktp }}</td>
                                <td>
                                    @if ($ktp->file_ktp)
                                        <img src="{{ asset('storage/' . $ktp->file_ktp) }}" alt="image" width="50">
                                    @else
                                        <img src="/img/slide/kosong.png" alt="image" width="45">
                                    @endif
                                </td>

                                <td>
                                    @if ($ktp->file_ktp)
                                        <a href="/ktp/{{ $ktp->id }}/download" class="btn btn-success">Download</a>
                                    @else
                                        <p>Empty</p>
                                    @endif

                                </td>

                                @can('admin')
                                    <td>
                                        <a href="/ktp/{{ $ktp->id }}/edit" class="btn btn-warning">Edit</a>

                                        <form id="data-{{ $ktp->id }}" class="d-inline-block"
                                            action="/ktp/{{ $ktp->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button data-id="{{ $ktp->id }}"
                                                data-user="{{ $ktp->penduduk->nama_penduduk }}" type="submit"
                                                class="btn btn-danger delete">Delete</button>
                                        </form>
                                    </td>
                                @endcan
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </main>
    @include('sweetalert::alert')

    <script>
        const deleteButton = document.querySelectorAll('.delete');
        deleteButton.forEach((dBtn) => {
            dBtn.addEventListener('click', function(event) {
                event.preventDefault();

                const user_id = this.dataset.id;
                const user_nama = this.dataset.user;

                Swal.fire({
                    title: 'Are you sure to delete this data?',
                    text: "You will delete data with name : " + user_nama,
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.isConfirmed) {
                        const dataSlug = document.getElementById('data-' + user_id);
                        dataSlug.submit();

                        Swal.fire(
                            'Deleted!',
                            'Your data has been deleted.',
                            'success'
                        )
                    }
                })
            })
        });

        function myFunction() {
            // Declare variables
            var input, filter, table, tr, nama, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");

            // Loop through all table rows, and hide those who don't match the search query
            for (i = 0; i < tr.length; i++) {
                nama = tr[i].getElementsByTagName("td")[1];
                if (nama) {
                    txtValue = nama.textContent || nama.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        tr[i].style.display = "";
                    } else {
                        tr[i].style.display = "none";
                    }
                }
            }
        }
    </script>
@endsection
