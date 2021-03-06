@extends('backEnd.layouts.master')
@section('title','Dashboard')
@section('content')

    
    <!--breadcrumbs-->
    
    <!--End-breadcrumbs-->

    <!--Action boxes-->
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span3"></div>
            <div class="span6">
                <div>
                    <canvas id="canvas"></canvas>
                </div>       
            </div>
            <div class="span3"></div>                 
        </div>
    </div>
    
     <div class="container-fluid">
        <div class="row-fluid">
        <div class="span6">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done!</strong> {{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Report Bulanan</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Bulan</th>
                        <th>Pendapatan</th>
                    </tr>
                    </thead>
                    <tbody>
                    
                    @foreach($reportBulanan as $b)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$b->bulan}}</td>
                        <td>Rp {{number_format($b->pendapatan)}}</td>
                    </tr>
                    @endforeach
                    
                    </tbody>
                </table>
            </div>
        </div>
        </div>

         <div class="span6">
        @if(Session::has('message'))
            <div class="alert alert-success text-center" role="alert">
                <strong>Well done!</strong> {{Session::get('message')}}
            </div>
        @endif
        <div class="widget-box">
            <div class="widget-title"> <span class="icon"><i class="icon-th"></i></span>
                <h5>Report Tahunan</h5>
            </div>
            <div class="widget-content nopadding">
                <table class="table table-bordered data-table">
                    <thead>
                    <tr>
                        <th>No</th>
                        <th>Tahun</th>
                        <th>Pendapatan</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($reportTahunan as $t)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$t->tahun}}</td>
                        <td>Rp {{number_format($t->pendapatan)}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        </div>

        </div>
    </div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    {{--     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.3/js/bootstrap-select.min.js" charset="utf-8"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0/dist/Chart.min.js"></script>
    
    <script type="text/javascript">
        // This function is called from the pop-up menus to transfer to
        // a different page. Ignore if the value returned is a null string:
        function goPage (newURL) {
            // if url is empty, skip the menu dividers and reset the menu selection to default
            if (newURL != "") {
                // if url is "-", it is this page -- reset the menu:
                if (newURL == "-" ) {
                    resetMenu();
                }
                // else, send page to designated URL
                else {
                    document.location.href = newURL;
                }
            }
        }
        // resets the menu selection upon entry to this page:
        function resetMenu() {
            document.gomenu.selector.selectedIndex = 2;
        }
    </script>
    <script>
        var url = "{{url('/chart')}}";
            var Pendapatan = new Array();
            var Labels = new Array();
            var Bulan = new Array();
            $(document).ready(function(){
              $.get(url, function(response){
                response.forEach(function(data){
                    Pendapatan.push(data.pendapatan);
                    Labels.push(data.pendapatan);                    
                    Bulan.push(data.bulan);
                });
                var ctx = document.getElementById("canvas").getContext('2d');
                    var myChart = new Chart(ctx, {
                      type: 'bar',
                      data: {
                          labels:Bulan,
                          datasets: [{
                              label: 'Pendapatan',
                              data: Pendapatan,
                              borderWidth: 1
                          }]
                      },
                      options: {
                          scales: {
                              yAxes: [{
                                  ticks: {
                                      beginAtZero:true
                                  }
                              }]
                          }
                      }
                  });
              });
            });
</script>
@endsection