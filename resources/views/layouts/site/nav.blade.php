  <!-- menu inicial -->
  <!--HEADER-->
<!--HEADER-->
<header class="main_header gradient gradient-green">
  <div class="container">
      <div class="main_header_logo">
          <h1><a class="icon-coffee transition" title="Home" href="{{route('sis.index')}}"><b>SIS</b></a></h1>
      </div>

      <nav class="main_header_nav ">
          <span class="main_header_nav_mobile j_menu_mobile_open icon-menu icon-notext radius transition"></span>
          <div class="main_header_nav_links j_menu_mobile_tab d-flex" style="display: inline-flex">
              <span class="main_header_nav_mobile_close j_menu_mobile_close icon-error icon-notext transition"></span>
              <a class="link transition radius active" title="Home" href="{{route('sis.index')}}">Home</a>
              <a class="link transition radius active" title="Admin" href="">Especialidades</a>
              <a class="link transition radius active" title="Admin" href="">Médicos</a>
              

              @auth
           
                <li class="nav-item dropdown no-arrow d-flex  " >
                  <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                      data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->name ?? ''}}</span>
                      <img height="40px" width="40px" class="img-profile rounded-circle"
                          src="{{(auth()->user()->foto != null) ? asset('/storage/fotos_perfil/'.auth()->user()->foto): '/assets/admin/img/undraw_profile.svg'}}">
                  </a>
                  <!-- Dropdown - User Information -->
                  <div class="dropdown-menu dropdown-menu-center shadow animated--grow-in"
                      aria-labelledby="userDropdown">
                      <a class="dropdown-item" href="">
                          <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                          Minha Conta
                      </a>
                      <a class="dropdown-item" href="">
                        <i class="fa fa-handshake fa-sm fa-fw mr-2 text-gray-400"></i>
                        Marcar Consulta
                      </a>

                      <a class="dropdown-item" href="{{route('sis.resgistro.clinico')}}">
                        <i class="fa fa-handshake fa-sm fa-fw mr-2 text-gray-400"></i>
                        Registro Cliníco
                      </a>

                      <div class="dropdown-divider"></div>
                          <a class="dropdown-item" href="{{route('sis.logout')}}">
                              <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                              Terminar Sessão
                          </a>
                  </div>
              </li>
                   

              @endauth
              
              @guest
               <a class="link login transition radius icon-sign-in" title="Entrar" href="{{route('login.form')}}">Entrar</a> 
              @endguest

              
             
              
          </div>
      </nav>
  </div>
</header>
