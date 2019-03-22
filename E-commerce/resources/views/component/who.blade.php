@if(Auth::guard('web')->check())
<p class="text-success">Kamu Login sebagai <strong>User</strong></p>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	<a class="dropdown-item" href="{{ route('user.logout') }}"
	   onclick="event.preventDefault();
	                 document.getElementById('logout-form').submit();">
	    {{ __('Logout') }}
	</a>

	<form id="logout-form" action="{{ route('user.logout') }}" method="GET" style="display: none;">
	    @csrf
	</form>
</div>
@else
<p class="text-danger">Kamu tidak Login sebagai <strong>User</strong></p>
@endif

@if(Auth::guard('admin')->check())
<p class="text-success">Kamu Login sebagai <strong>Admin</strong></p>
<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
	<a class="dropdown-item" href="{{ route('admin.logout') }}"
	   onclick="event.preventDefault();
	                 document.getElementById('logout-form').submit();">
	    {{ __('Logout') }}
	</a>

	<form id="logout-form" action="{{ route('admin.logout') }}" method="GET" style="display: none;">
	    @csrf
	</form>
</div>
@else
<p class="text-danger">Kamu tidak Login sebagai <strong>Admin</strong></p>
@endif