
@extends('merge.admin.index')
@section('title','Dashboard')

@section('content')

    <div class="ecommerce-widget">

        <div class="row">
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">
                            <i class="fa fa-user fa-4x text-dark"></i>
                            Utentes</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">{{$utentes->count()}}</h1>
                        </div>
                    </div>
                    <div id="sparkline-revenue"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">
                            <i class="fa fa-user-md fa-4x text-dark"></i>
                            Médicos</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">{{count($medicos)}}</h1>
                        </div>
                    </div>
                    <div id="sparkline-revenue2"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">
                            <i class="fa fa-medkit fa-4x text-dark"></i>

                            Exames</h5>
                        <div class="metric-value d-inline-block">
                            
                            <h1 class="mb-1">{{count($exames)}}</h1>
                        </div>
                    </div>
                    <div id="sparkline-revenue3"></div>
                </div>
            </div>
            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="text-muted">
                            <i class="fa fa-handshake fa-4x text-dark"></i>
                            Consultas</h5>
                        <div class="metric-value d-inline-block">
                            <h1 class="mb-1">{{count($consultas)}}</h1>
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
                        Consultas</h5>
                    <div class="card-body">
                        <canvas id="deliveryChart"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                <div class="card">
                    <h5 class="card-header"> <i class="far fa-chart"></i>
                        <i class="fa fa-chart-pie"></i>
                        Exames</h5>
                    <div class="card-body">
                        <canvas id="orderChart"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

<script src="{{asset('/admin/libs/js/chart.min.js')}}"></script>





