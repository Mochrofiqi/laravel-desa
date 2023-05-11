
        <div class="chart card" style="width: 500px">
            <canvas id="myChart1"></canvas>
        </div>

    <script>
        const labels = [
            'Pelayanan KTP',
            'Pelayanan Akta Kematian',
        ];
        const data = {
            labels: labels,
            datasets: [{
                label: 'Jumlah Pelayanan Pada Sistem',
                backgroundColor: [
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(201, 203, 207, 0.2)'
                ],
                borderColor: [
                    'rgb(153, 102, 255)',
                    'rgb(201, 203, 207)'
                ],
                data: [
                    {!! json_encode($ktp_count) !!},
                    {!! json_encode($kematian_count) !!}
                ],
                hoverOffset: 4
            }]
        };

        const config = {
            type: 'doughnut',
            data: data,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        };

        const myChart1 = new Chart(
            document.getElementById('myChart1'),
            config
        );
    </script>
