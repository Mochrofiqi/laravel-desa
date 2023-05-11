@extends('utama.layouts.master')

@section('content')
    <div class="box6">
        <div class="row p-3 justify-content-center">
            <h1 class="text-center" style="font-family: Lucida Sans">Perangkat Desa Panglipuran</h1>

            <hr class="my-2">
                @foreach ($perangkats as $perangkat)
                    <div class="col-lg-3 col-md-6 col-md-5 mt-3 ">
                        <div class="card" style="border-radius: 20px">
                            <div class="card-body text-center mt-3 pb-1 mb-3">
                                @if ($perangkat->foto_perangkat)
                                        <img src="{{ asset('storage/' . $perangkat->foto_perangkat) }}" alt="image" height="200" style="border-radius: 20px">
                                    @else
                                        <img src="/img/slide/kosong.png" alt="image" width="45">
                                    @endif

                                <h5 class="my-2 pt-1 fw-bold" style="font-family: Lucida Sans">{{ $perangkat->penduduk->nama_penduduk }}</h5>
                                <h5 class="" style="font-family: 'Lucida Sans Regular', 'Lucida Grande'">{{ $perangkat->jabatan }}</h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
