@extends('admin.layouts.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Penduduk</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>

        <div style="background-color: white">
            <div class="p-3">
                <h2 class="text-center">Data Penduduk</h2>

                <hr class="bg-secondary">
                <div class="penduduk">
                    <a href="/penduduk/create" class="btn btn-success"><strong>Tambah Data Penduduk</strong></a>
                </div>

                {{-- <div class="row justify-content-end">
                    <div class="col-md-3">
                        <form action="/penduduk">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Pencarian.." name="search"
                                    id="search" value="{{ request('search') }}">
                                <button class="btn btn-outline-secondary" type="submit">Cari</button>
                            </div>
                        </form>
                    </div>
                </div> --}}
            </div>
            <div class="table-responsive p-3">
                <table  id="myTable" class="table table-secondary table-striped text-center ">
                    <thead>
                        <tr>
                            <th class="table-plus datatable-nosort">No</th>
                            <th>Nama</th>
                            <th>NIK</th>
                            <th>TTL</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Dusun</th>
                            <th>Alamat</th>
                            <th>Keterangan</th>
                            <th>Setting</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($penduduks as $penduduk)
                            <tr>
                                <td class="table-plus">{{ $loop->iteration }}</td>
                                <td>{{ $penduduk->nama_penduduk }}</td>
                                <td>{{ $penduduk->nik_penduduk }}</td>
                                <td>{{ $penduduk->ttl_penduduk }}</td>
                                <td>{{ $penduduk->jk_penduduk }}</td>
                                <td>{{ $penduduk->agama }}</td>
                                <td>{{ $penduduk->dusun->nama_dusun }}</td>
                                <td>{{ $penduduk->alamat_penduduk }}</td>
                                <td>{{ $penduduk->ket_penduduk }}</td>
                                <td>
                                    <a href="/penduduk/{{ $penduduk->id }}/edit" class="btn btn-warning">Edit</a>

                                    <form id="data-{{ $penduduk->id }}" class="d-inline-block" action="/penduduk/{{ $penduduk->id }}" method="POST">
                                        @method('delete')
                                        @csrf
                                        <button data-id="{{ $penduduk->id }}" data-user="{{ $penduduk->nama_penduduk }}" type="submit" class="btn btn-danger delete">Delete</button>
                                    </form>
                                </td>
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
        dBtn.addEventListener('click', function (event) {
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
