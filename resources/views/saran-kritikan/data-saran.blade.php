@extends('admin.layouts.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Saran dan Kritikan</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>

        <div style="background-color: white">
            <div class="p-3">
                <h2 class="text-center">Data Saran dan Kritikan</h2>

                <hr class="bg-secondary">
                <div class="">
                    <a href="/saran/create" class="btn btn-success"><strong>Tambah Data Saran dan Kritikan</strong></a>
                </div>

                {{-- <div class="row justify-content-end">
                    <div class="col-md-3 mt-3">
                        <form action="/saran">
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
                            <th>Tanggal Pembuatan</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Alamat</th>
                            <th>Saran dan Kritikan</th>
                            @can('admin')
                                <th>Setting</th>
                            @endcan
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($sarans as $saran)
                            <tr>
                                <td class="table-plus">{{ $loop->iteration }}</td>
                                <td>{{ $saran->created_at }}</td>
                                <td>{{ $saran->user->nama }}</td>
                                <td>{{ $saran->jk_saran }}</td>
                                <td>{{ $saran->alamat_saran }}</td>
                                <td>{!! $saran->saran !!}</td>

                                @can('admin')
                                    <td>

                                        <form id="data-{{ $saran->id }}" class="d-inline-block" action="/saran/{{ $saran->id }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button data-id="{{ $saran->id }}" data-user="{{ $saran->user->nama }}" type="submit" class="btn btn-danger delete">Delete</button>
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
