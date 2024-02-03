<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{Route::Current()->getName()== 'sis.admin.dashboard'? 'active': ''}} " href="{{route('sis.admin.dashboard')}}" >
                            <i class="fa fa-chart-pie"></i>
                            Dashboardd</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{(Route::Current()->getName()== 'sis.admin.listar.utentes'? 'active': '')}} " href="{{route('sis.admin.listar.utentes')}}" >
                            <i class="fa fa-user fa-lg"></i>
                            Utentes</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{Route::Current()->getName()=='sis.admin.listar.medicos'? 'active': ''}}  " href="{{route('sis.admin.listar.medicos')}}" >
                            <i class="fa fa-user-md fa-lg"></i>
                            Médicos</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link {{Route::Current()->getName()=='sis.admin.listar.especialidades'? 'active': ''}} " href="{{route('sis.admin.listar.especialidades')}}" >
                            <i class="fa fa-book fa-lg " aria-hidden="true"></i>
                            Especilalidades</a>
                    </li>
                    
                   
                    <li class="nav-item ">
                        <a class="nav-link " href="" >
                            <i class="fa fa-medkit fa-lg"></i>
                            Exames</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="" >
                            <i class="fa fa-handshake fa-lg "></i>
                            Consultas</a>
                    </li>
                   
                    <li class="nav-item ">
                        <a class="nav-link {{(Route::Current()->getName()== 'sis.admin.listar.utilizador')? 'active': ''}}"  href="{{route('sis.admin.listar.utilizador')}}" >
                            <i class="fa fa-truck"></i>
                            Utilizadores</a>
                    </li>
                   
                </ul>
            </div>
        </nav>
    </div>
</div>

<div class="dashboard-wrapper">
    <div class="dashboard-ecommerce">
        <div class="container-fluid dashboard-content ">
           
       
    