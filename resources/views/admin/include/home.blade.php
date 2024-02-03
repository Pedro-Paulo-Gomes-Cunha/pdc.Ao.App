
@extends('merge.admin.index')
@section('title','Dashboard')

@section('content')

    <div class="ecommerce-widget">

        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">
                            <i class="fa fa-users"></i>
                            Utilizadores</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">10</h1>
                        </div>
                    </div>
                    <div id="sparkline-revenue"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">
                            <i class="fa fa-box"></i>
                            Categorias</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">20</h1>
                        </div>
                    </div>
                    <div id="sparkline-revenue2"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">
                            <i class="fa fa-tag"></i>
                            Items</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">67</h1>
                        </div>
                    </div>
                    <div id="sparkline-revenue3"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">
                            <i class="fas fa-clipboard-list"></i>
                            Pedidos de Hoje</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">23</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header">
                        <i class="fa fa-chart-pie"></i>
                        ENCOMENDAS NO SITE</h5>
                    <div class="card-body">
                        <canvas id="deliveryChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header"> <i class="far fa-chart"></i>
                        <i class="fa fa-chart-pie"></i>
                        PEDIDOS NO RESTAURANTE</h5>
                    <div class="card-body">
                        <canvas id="orderChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




<script src="{{asset('/admin/libs/js/chart.min.js')}}"></script>

<script>
    const ctx = document.getElementById('deliveryChart');
    var dv = JSON.parse('{!! json_encode($deliveryMonth ?? '')  !!}');
    var dh = JSON.parse('{!! json_encode($deliveryMonthCount ?? '')  !!}');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: dv,
            datasets: [{
                label: 'Estatística Mensal',
                data: dh,
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
    </script>

 <script>
    const ctx_order = document.getElementById('orderChart');
    var ov = JSON.parse('{!! json_encode($monthOrder ?? '')  !!}');
    var oh = JSON.parse('{!! json_encode($monthOrderCount ?? '')  !!}');
    new Chart(ctx_order, {
        type: 'bar',
        data: {
            labels: ov,
            datasets: [{
              label: 'Estatística Mensal',
              data: oh,
              borderWidth: 1
        }]
    },
      options: {
        scales: {
          y: {
              beginAtZero: true
            }
        }
    }
});
  </script> 



