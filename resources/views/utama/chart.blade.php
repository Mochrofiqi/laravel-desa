@extends('utama.layouts.master')

@section('content')
    <div class="box6">
        <h1 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Statistik Desa</h1>
        <hr>

        <div class="chart card" style="width: 1100px">
            <canvas id="myChart"></canvas>
        </div>

    </div>

    <script>
        const labels = [
            'Penduduk',
            'Perangkat Desa',
            'Dusun',
            'Bantuan',
            'Jenis Bantuan',
            'Pelayanan KTP',
            'Pelayanan Akta Kematian',
        ];
        const data = {
            labels: labels,
            datasets: [{
                label: 'Statistik Desa Pada Sistem',
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(255, 159, 64, 0.2)',
                    'rgba(255, 205, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(170, 160, 180, 0.2)'
                ],
                borderColor: [
                    'rgb(255, 99, 132)',
                    'rgb(255, 159, 64)',
                    'rgb(255, 205, 86)',
                    'rgb(75, 192, 192)',
                    'rgb(54, 162, 235)',
                    'rgb(153, 102, 255)',
                    'rgb(170, 160, 180)'
                ],
                data: [
                    {!! json_encode($penduduk_count) !!},
                    {!! json_encode($perangkat_count) !!},
                    {!! json_encode($dusun_count) !!},
                    {!! json_encode($bantuan_count) !!},
                    {!! json_encode($jenis_bantuan_count) !!},
                    {!! json_encode($ktp_count) !!},
                    {!! json_encode($kematian_count) !!}
                ],
                borderWidth: 1,
            }]
        };

        const config = {
            type: 'bar',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        const myChart = new Chart(
            document.getElementById('myChart'),
            config
        );
    </script>

@endsection
