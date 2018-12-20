<div id="header">
	<div class="dark-background"></div>
	<a class="logo"></a>
	<div class="user">

		<a>
			<img src="header/image/user.png"> 
			<span>{{ Auth::user()->name }}</span>
		</a>
		<div class="user-dropdown">
			<a href="{{ asset('admin/logout') }}">Log out</a>
		</div>
	</div>
</div>