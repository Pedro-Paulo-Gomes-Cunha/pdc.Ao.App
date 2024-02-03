
 </div>
</div>
<div class="footer">
  <div class="container-fluid">
      <div class="row">
          <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
              Todos direitos reservados para SIS</a>.
          </div>
          
      </div>
  </div>
</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script src="{{asset('/admin/vendor/jquery/jquery-3.3.1.min.js')}}"></script>
  <script src="{{asset('/admin/vendor/bootstrap/js/bootstrap.bundle.js')}}"></script>
  <script src="{{asset('/admin/vendor/slimscroll/jquery.slimscroll.js')}}"></script>
  <script src="{{asset('/admin/libs/js/main-js.js')}}"></script>
  <script src="{{asset('/admin/vendor/charts/sparkline/jquery.sparkline.js')}}"></script>
  <script src="{{asset('/admin/vendor/charts/morris-bundle/raphael.min.js')}}"></script>
  <script src="{{asset('/admin/vendor/charts/c3charts/c3.min.js')}}"></script>
  <script src="{{asset('/admin/vendor/charts/c3charts/d3-5.4.0.min.js')}}"></script>
  <script src="{{asset('/admin/vendor/charts/c3charts/C3chartjs.js')}}"></script>
  {{-- <script src="{{asset('/admin/libs/js/dashboard-ecommerce.js')}}"></script> --}}
  <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/dataTables.buttons.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>

    @stack('select2')
    @stack('chart')
</body>

</html>