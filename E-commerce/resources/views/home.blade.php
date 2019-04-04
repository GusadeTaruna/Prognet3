@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User Dashboard</div>

                <div class="card-body">
                    @component('component.who')

                    @endcomponent
                    
                    @if(Auth::guard('web')->check())
                    <a class="dropdown-item" href="{{ route('user.logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        Logout User
                    </a>

                    <form id="logout-form" action="{{ route('user.logout') }}" method="GET" style="display: none;">
                        @csrf
                    </form>
                    @else
                    <a class="dropdown-item" href="{{ route('admin.logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        Logout Admin
                    </a>

                    <form id="logout-form" action="{{ route('admin.logout') }}" method="GET" style="display: none;">
                        @csrf
                    </form>
                    @endif
                    @if(Auth::guard('admin')->check())
                        <a class="dropdown-item" href="{{ route('admin.logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                            Logout Admin
                        </a>

                        <form id="logout-form" action="{{ route('admin.logout') }}" method="GET" style="display: none;">
                            @csrf
                        </form>
                    @else
                    <a class="dropdown-item" href="{{ route('user.logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        Logout User
                    </a>

                    <form id="logout-form" action="{{ route('user.logout') }}" method="GET" style="display: none;">
                        @csrf
                    </form>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
