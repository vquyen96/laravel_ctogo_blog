<div id="footer">
	<section id="footer-top">
		<div class="partner partner-carousel owl-carousel">
			<div class="partner-img-container">
				<img class="partner-img" src="header-footer/image/logo-mytour.png">
			</div>
			<div class="partner-img-container">
				<img class="partner-img" src="header-footer/image/logo.png">
			</div>
			<div class="partner-img-container">
				<img class="partner-img" src="header-footer/image/logo_vntrip.png">
			</div>
			<div class="partner-img-container">
				<img class="partner-img" src="header-footer/image/Logo cgroup.png">
			</div>
		</div>
	</section>

	<section id="footer-bottom">
		<div class="container">
			<div class="row">
				<div class="logo-footer">
					<a href="{{ asset('/') }}"><img src="header-footer/image/logo-color.png" alt="Ctogo"></a>
				</div>

				<div class="copyright semi-bold grey">
					<span class="mr-4">Copyright © cgroupvn.com</span>
					<span>
						<a href="https://www.facebook.com/ctogoworld" target="_blank" class="grey"><i class="fab fa-facebook-square"></i></a>
						<a class="grey"><i class="fab fa-twitter-square"></i></a>
						<a class="grey"><i class="fab fa-instagram"></i></a>
					</span>
				</div>
			</div>
		</div>
	</section>
</div>

<div id="search-box">
	<div class="close-search"><a class="close-button"></a></div>
	<div class="center-box">
		<div class="guide">Nhập từ khóa và ấn "ENTER" để tìm kiếm</div>
		<form method="get" action="{{ asset('tim-kiem') }}">
			<input class="search-input" type="text" name="keyword" placeholder="Nhập từ khóa">
		</form>
	</div>

</div>

<div id="menu-screen">
	<div id="side-menu">
		<ul>
			<li class="mb-4"><a class="icon"><span class="close-button"></span></a> <a class="grey">Danh mục</a></li>
			@foreach($category_list as $category)
			<li><a class="icon">{!!$category->icon!!}</a> <a href="{{ asset('danh-muc/'.$category->slug.'/'.$category->id) }}">{{$category->name}}</a></li>
			@endforeach
		</ul>
	</div>
</div>

{{-- <div id="subcribe" class="hs-btn hs-btn-green">Subcribe</div> --}}