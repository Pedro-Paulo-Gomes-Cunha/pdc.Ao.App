  <!-- menu inicial -->
  <!--HEADER-->
<!--HEADER-->
<header class="main_header gradient gradient-green">
  <div class="container">
      <div class="main_header_logo">
          <h1><a class="icon-heartbeat transition" title="Home" href="{{route('sis.index')}}"><b>PDC</b></a></h1>
      </div>

      <nav class="main_header_nav">
          <span class="main_header_nav_mobile j_menu_mobile_open icon-menu icon-notext radius transition"></span>
          <div class="main_header_nav_links j_menu_mobile_tab">
              <span class="main_header_nav_mobile_close j_menu_mobile_close icon-error icon-notext transition"></span>
              <a class="link transition radius active" title="Home" href="{{route('sis.index')}}">Home</a>
              <a class="link transition radius active" title="Admin" href="">Especialidades</a>
              <a class="link transition radius active" title="Admin" href="">Médicos</a>

              <a class="link transition radius" title="Sobre" >Sobre</a>
              <a class="link login transition radius icon-sign-in" title="Entrar" href="{{route('sis.login')}}">Entrar</a>
             
          </div>
      </nav>
  </div>
</header>
