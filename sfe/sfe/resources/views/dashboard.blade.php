@extends('layouts.app')

@section('content')
    
    @include('layouts.headers.cards')
    <div class="container-fluid mt--7">
        <div class="row mt-5">
            <div class="col-xl-12 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">

                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Région</th>
                                    <th scope="col">Nombre de Cas Total</th>
                                    <th scope="col">Nouveau Cas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listcas as $cas)
                                <tr>
                                    <th scope="row">
                                        {{ $cas->nameregion }}
                                    </th>
                                    <td>
                                        {{ $cas->nbcas }}
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card bg-gradient-default shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-light ls-1 mb-1">Overview</h6>
                                <h2 class="text-white mb-0">Sales value</h2>
                            </div>
                           
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="myChart" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="card shadow">
                    <div class="card-header bg-transparent">
                        <div class="row align-items-center">
                            <div class="col">
                                <h6 class="text-uppercase text-muted ls-1 mb-1">Performance</h6>
                                <h2 class="mb-0">Total orders</h2>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="chart">
                            <canvas id="chart-orders" class="chart-canvas"></canvas>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-5">
        <div class="col-xl-8 mb-5 mb-xl-0">
                <div class="card shadow">
                    <div class="card-header border-0">
                        <div class="row align-items-center">
                            <div class="col">
                                
                            </div>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <!-- Projects table -->
                        <table class="table align-items-center table-flush">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">Région</th>
                                    <th scope="col">Nombre de Cas Total</th>
                                    <th scope="col">Nouveau Cas</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($listcas as $cas)
                                <tr>
                                    <th scope="row">
                                        {{ $cas->nameregion }}
                                    </th>
                                    <td>
                                        {{ $cas->nbcas }}
                                    </td>
                                    <td>
                                        <i class="fas fa-arrow-down text-danger mr-3"></i> 46,53%
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth')
    </div>
@endsection

@push('js')
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="{{ asset('argon') }}/vendor/chart.js/dist/Chart.extension.js"></script>

    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var conf = "<?php echo $confirmedcas[0]->conf; ?>";
        var test = "<?php echo $testedcas[0]->tested; ?>";
        var death = "<?php echo $decescas[0]->death; ?>";
        var guer = "<?php echo $gueriscas[0]->guer; ?>";
        var myChart = new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Confirmed', 'Tested', 'Death', 'healed'],
                datasets: [{
                    label: '# of Votes',
                    data: [conf, test, death, guer],
                    backgroundColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                    borderColor: [
                        'rgba(255, 99, 132, 0.2)',
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 206, 86, 0.2)',
                        'rgba(153, 102, 255, 0.2)'
                    ],
                }]
            }
        });

        chart-orders.data = []
</script>
@endpush

