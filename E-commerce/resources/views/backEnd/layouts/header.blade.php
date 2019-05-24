<!--Header-part-->
<div id="header">
    <h1><a href="dashboard.html">Laravel Admin</a></h1>
</div>
<!--close-Header-part-->
<!--top-Header-menu-->



</style>
<div id="user-nav" style="width: 75%">

    <ul class="nav">
        

        <li class=""  style="float: right;">
            <a
               onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <i class="icon icon-share-alt"></i>{{ __('Logout') }}
            </a>

            <form id="logout-form" action="{{ route('admin.logout') }}" {{-- method="POST" --}} style="display: none;">
                @csrf
            </form>

        </li>
        
        @php
            $jum = DB::table('admin_notifications')->where('read_at',NULL)->count();
            $notif = DB::table('admin_notifications')->where('read_at',NULL)->get();
        @endphp
        <li class="dropdown"  style="float: right;">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#"><i class="icon icon-bell"></i> Notification
            @if($jum != 0)<span class="badge" style="background-color: red;">1</span>@endif <span class="caret"></span></a>

            <ul class="dropdown-menu">
                <center><button id="readnotif"><a  style="color: green;">----Mark All As Read---</a></button></center>
                @foreach($notif as $notif)
                   <li><a href="#"> {!!$notif->data!!}</a></li>
                @endforeach
            </ul>
        </li>

        <li class="" style="float: right;"><a class="dropdown-item" href="#"">
                {{Auth::user()->name}}
            </a>
            
        </li>
        
    </ul>
</div>

<script src="{{asset('frontEnd/js/jquery.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script type="text/javascript">
    $(document).ready(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('#readnotif').click(function(){
            console.log("terklik");
            var baseUrl = window.location.protocol+"//"+window.location.host;
            $.ajax({
                  url: baseUrl+'/admin/markReadAdmin',  
                  type : 'post',
                  dataType: 'JSON',
                  data: {
                    "_token": "{{ csrf_token() }}",
                    
                    },
                  success:function(response){
                        location.reload();
                  },
                  error:function(){
                    alert("GAGAL");
                  }
              });
        });
    });
</script>
