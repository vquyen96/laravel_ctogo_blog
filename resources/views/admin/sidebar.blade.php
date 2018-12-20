<div id="sidebar">
	<div class="user-panel">
		<div class="image">
			<img src="base/image/user.png">
		</div>
		<div class="info">
			<p>@if( Auth::user()->level == 1 ) Admin @else Staff @endif</p>
		</div>
	</div>

	<ul class="sidebar-menu">
		<li class="header">MAIN NAVIGATION</li>
		<li class=""><a @if( Request::segment(2)==null ) class="active" @endif href="{{ asset('admin') }}"><i class="fas fa-tachometer-alt"></i> <span>Home</span></a></li>
		<li class=""><a @if( Request::segment(2)=='user' ) class="active" @endif href="{{ asset('admin/user') }}"><i class="fas fa-users"></i> <span>User</span></a></li>
		<li class=""><a @if( Request::segment(2)=='article' ) class="active" @endif href="{{ asset('admin/article') }}"><i class="far fa-newspaper"></i> <span>Quản lý bài viết</span></a></li>
		<li class=""><a @if( Request::segment(2)=='category' ) class="active" @endif href="{{ asset('admin/category') }}"><i class="fab fa-wpforms"></i> <span>Quản lý danh mục</span></a></li>
	</ul>
</div>