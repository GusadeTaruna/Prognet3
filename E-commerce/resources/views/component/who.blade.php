@if(Auth::guard('web')->check())
<p class="text-success">Kamu Login sebagai <strong>User</strong></p>
@else
<p class="text-danger">Kamu tidak Login sebagai <strong>User</strong></p>
@endif

@if(Auth::guard('admin')->check())
<p class="text-success">Kamu Login sebagai <strong>Admin</strong></p>
@else
<p class="text-danger">Kamu tidak Login sebagai <strong>Admin</strong></p>
@endif