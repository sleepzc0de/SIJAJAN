@extends('layouts.appdashboard')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">Laporan / Analitik</div>
            <div class="card-body">
                <div class="row">
                    <!-- Grafik Penjualan Bulanan -->
                    <div class="col-md-6">
                        <h5>Penjualan Bulanan</h5>
                        <canvas id="salesChart"></canvas>
                    </div>

                    <!-- Grafik Pelanggan Baru -->
                    <div class="col-md-6">
                        <h5>Pelanggan Baru Bulanan</h5>
                        <canvas id="usersChart"></canvas>
                    </div>
                </div>

                <hr>

                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Laporan</th>
                                <th>Detail</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Total Penjualan</td>
                                <td>Rp 2.500.000</td>
                            </tr>
                            <tr>
                                <td>Pelanggan Baru</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>Pelanggan Aktif</td>
                                <td>50</td>
                            </tr>
                            <tr>
                                <td>Makanan Terlaris</td>
                                <td>Kue Nusantara</td>
                            </tr>
                            <tr>
                                <td>Minuman Terlaris</td>
                                <td>Es Bali</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctxSales = document.getElementById('salesChart').getContext('2d');
        var salesChart = new Chart(ctxSales, {
            type: 'bar',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli'],
                datasets: [{
                    label: 'Penjualan',
                    data: [2500000, 2500000, 2500000, 2500000, 2500000, 2500000, 2500000],
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            callback: function(value, index, values) {
                                return 'Rp ' + value.toLocaleString();
                            }
                        }
                    }
                }
            }
        });

        var ctxUsers = document.getElementById('usersChart').getContext('2d');
        var usersChart = new Chart(ctxUsers, {
            type: 'line',
            data: {
                labels: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli'],
                datasets: [{
                    label: 'Pelanggan Baru',
                    data: [12, 12, 12, 12, 12, 12, 12],
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 1
                        }
                    }
                }
            }
        });
    </script>
@endsection
